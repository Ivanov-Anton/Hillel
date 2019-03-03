<?php

abstract class Person
{
    protected $fullName;
    protected $phone;
    protected $email;
    protected $id;
    protected $role;

    const SAVE_ON = true;
    const SAVE_OFF = false;
    // switch AutoSave users to the database when creating an instance
    public static $isSavePerson = self::SAVE_OFF;
    // for AutoSave users $sql, $propertis
    private $sql;
    private $propertis = [];
    private $db;

    /**
     * Person constructor.
     * @param $fullName - full name of the person
     * @param $phone - user phone
     * @param $email - user email
     * @param $role - user status (admin asudent teacher)
     */
    public function __construct($fullName, $phone, $email, $role) {
		$this->fullName = $fullName;
		$this->phone = $phone;
		$this->email = $email;
		$this->role = $role;
		$this->db = DB::getConnect();
		$this->personInit();
	}
    // AutoSave users sistem: 1 -- init
    private function personInit()
	{
	    // adding fields for a table to the database
		$this->propertis = [
			'fullName' => $this->fullName,
			'phone' => $this->phone,
			'email' => $this->email,
			'role' => $this->role,
            // other fields added via method: addProperty()
		];
	}
    // AutoSave users sistem: 2 -- adding from class (construct) that extends this class
    protected function addProperty($name, $value)
    {
        $this->propertis[$name] = $value;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFullName()
	{
		return $this->fullName;
	}

    public function getPhone()
	{
		return $this->phone;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getRole()
	{
		return $this->role;
	}

	public function getSubject()
	{
		return $this->propertis['subject'];
	}

    public function setId($id)
    {
        $this->id = $id;
    }

    // AutoSave users sistem: build sql request 3 -- request ready to send
    // request pseudovariable built and ready
	private function bildSql()
	{
		$this->sql = 'insert into `members` set ';
		foreach ($this->propertis as $key => $value) {
			$this->sql .= $key . ' = :' . $key . ', ';
		}
		$this->sql = substr($this->sql, 0, -2);
		return $this->sql;
	}

	public function savePerson()
	{
		try {
		    // Preparing request
			$query = $this->db->prepare($this->bildSql());
		} catch (PDOException $e) {
			DB::mssg('Error preparing request');
		}
		// bind each element of an array $propertis[] with person properties
		foreach ($this->propertis as $nameKey => $value) {
			$query->bindValue(':'. $nameKey, $value);
		}
		try {
			$query->execute();
			
		} catch(PDOException $e) {
			DB::mssg('Error execution query, savePerson not fulfilled' . $e.getMessage());
		}
	}

    function __destruct()
	{
        // AutoSave users sistem: build sql request 4 -- execute sql requesr, adding success!!!
		if (self::$isSavePerson) {
			$this->savePerson();
		}
		unset($this->db);
	}

	// Be overridden in every child class
    abstract protected function getinfo();
}