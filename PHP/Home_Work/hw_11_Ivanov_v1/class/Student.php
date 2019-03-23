<?php
require_once('Person.php');
/**
 * Class Student
 * @property $averangeMark — averange score of the Student
 * @property $attendance — attendance as a percentage of the student
 */
class Student extends Person
{
	private $averangeMark;
	private $attendance;

	public function __construct($fullName, $phone, $email, $averangeMark, $attendance, $id = null)
	{
		parent::__construct($fullName, $phone, $email, $role = 'student');	
		$this->averangeMark = $averangeMark;
		$this->attendance = $attendance;
        $this->setId($id);
		$this->addProperty('averangeMark', $this->averangeMark);
		$this->addProperty('attendance', $this->attendance);
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
		            <th>Средний балл</th>
		            <th>Посещенных занятий</th>
                </tr>
                <tr>
		            <td>' . $this->getId() . '</td>
		            <td>' . $this->getFullName() . '</td>
		            <td>' . $this->getPhone() . '</td>
		            <td>' . $this->getEmail() . '</td>
		            <td>' . $this->getRole() . '</td>
		            <td>' . $this->averangeMark . '</td>
		            <td>' . $this->attendance . '</td>
                </tr>
		    </table>>
		';
        return $allInfo;
	}
}