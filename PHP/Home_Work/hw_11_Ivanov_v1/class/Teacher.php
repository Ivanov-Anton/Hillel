<?php
require_once('Person.php');
/**
 * Class Teacher
 * @property $subject — subject to teacher
 */
class Teacher extends Person
{
	private $subject;

	public function __construct($fullName, $phone, $email, $subject, $id = null)
	{
		parent::__construct($fullName, $phone, $email, $role = 'teacher');
		$this->subject = $subject;
        $this->setId($id);
		$this->addProperty('subject', $this->subject);
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
		            <th>Предмет</th>
                </tr>
                <tr>
		            <td>' . $this->getId() . '</td>
		            <td>' . $this->getFullName() . '</td>
		            <td>' . $this->getPhone() . '</td>
		            <td>' . $this->getEmail() . '</td>
		            <td>' . $this->getRole() . '</td>
		            <td>' . $this->subject . '</td>
                </tr>
		    </table>>
		';
		return $allInfo;
	}
}