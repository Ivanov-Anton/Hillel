<?php
/**
 * Database should be created with the name of the University for the correct operation of the application
 */
require_once('class/DB.php');
require_once('class/Admin.php');
require_once('class/Person.php');
require_once('class/Student.php');
require_once('class/Teacher.php');
$db = DB::getConnect();
$isConsole = ($argc > 0) ? true : false;

try {
	$sql = 'create table members (
		id int auto_increment primary key,
		fullName varchar(250),
		phone varchar(250),
		email varchar(250),
		role varchar(250),
		averangeMark float,
		subject varchar(250),
		workingDay varchar(250),
		attendance float
	)';
	$db->exec($sql);
	$persons = [];
	// Enable AutoSave of persons in the database. $isSavePerson -- dafault value SAVE_OFF
	Person::$isSavePerson = Person::SAVE_ON;
	$persons[] = new Teacher('Владислав Шмыгло', '+380963692585', 'vlad@gmail.com', 'Machine Learning');
    $persons[] = new Teacher('Алексей Елизаренко', '+30974105874', 'alexElizz@gmail.com', 'Java Enterprise');
    $persons[] = new Teacher('Владислав Герасименко', '+30974105874', 'vladGera@gmail.com', 'Java Elementary');
    $persons[] = new Teacher('Иван Ищенко', '+380965214523', 'IvanIjenko@gmail.com', 'Product Management');
    $persons[] = new Student('Дарья Шувалова', '+380995236565' , 'Darina@gmail.com', 50, 20);
    $persons[] = new Student('Вдажимир Терехов', '+38055234567' , 'terehov@gmail.com', 60, 10);
    $persons[] = new Admin('Jonatan Len', '+12540145236', 'Janatan@yahho.com', 'Tuesday');
    $persons[] = new Teacher('Артем Хряпа', '+380774521414', 'arteminPython@gmail.com', 'Python');
    $persons[] = new Teacher('Екатерина Пасичнюк', '+30978956324', 'superDesigner@gmail.com', 'UI/UX Design');
    $persons[] = new Student('Роман Кучерук', '+380553456789' , 'roma@gmail.com', 19, 13);
	$persons[] = new Student('Михаил Турбовец', '+30976525987' , 'mishaTurbovec@gmail.com', 41, 13);
	$persons[] = new Student('Владислав Карпович', '+30678525412' , 'karpovich@gmail.com', 50, 15);
	$persons[] = new Student('Евгений Кузнецов', '+30678525000' , 'evgeniyKuznechov@gmail.com', 58, 15);
	$persons[] = new Student('Александр Багрий', '+30677412587' , 'alex@gmail.com', 58, 15);
	$persons[] = new Student('Александр Будник', '+30682343311' , 'alexBudnik@gmail.com', 68, 15);
	$persons[] = new Student('Иванов Антон', '+380978939344' , 'jinsike123@gmail.com', 79, 15);
	$message = 'Migration completed successfully!';
	if ($isConsole) {
	    echo $message;
    } elseif (!$isConsole) {
        DB::mssg($message);
    }
} catch(PDOException $e) {
    if ($isConsole) {
        echo $e->getMessage();
    } elseif (!$isConsole) {
        DB::mssg('Table "members" already exists!', $e);
    }
}



