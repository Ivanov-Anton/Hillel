<?php
require_once('Person.php');
/**
 * Class Admin -- Class for creating and storing users
 * @property $workingDay — one day of the week wich works administrator
 */
class Admin extends Person
{
	public $workingDay;
	public function __construct($fullName, $phone, $email, $workingDay, $id = null)
	{
		parent::__construct($fullName, $phone, $email, $role = 'admin');
        $this->setId($id);
		$this->workingDay = $workingDay;

		$this->addProperty('workingDay', $this->workingDay);

	}

	public function getInfo()
	{
        $allInfo = '
		    <table>
		        <tr>
		            <th>Номер</th>
		            <th>Имя</th>
		            <th>Телефон</th>
		            <th>Почта</th>
		            <th>Роль</th>
		            <th>Рабочий день</th>
                </tr>
                <tr>
		            <td>' . $this->getId() . '</td>
		            <td>' . $this->getFullName() . '</td>
		            <td>' . $this->getPhone() . '</td>
		            <td>' . $this->getEmail() . '</td>
		            <td>' . $this->getRole() . '</td>
		            <td>' . $this->workingDay . '</td>
                </tr>
		    </table>>
		';
        return $allInfo;
	}
}