<?php
    /**
     * Database should be created with the name of the University for the correct operation of the application
     */
	require_once('class/DB.php');
	require_once('class/Person.php');
	require_once('class/Student.php');
	require_once('class/Admin.php');
	require_once('class/Teacher.php');
	$db = DB::getConnect();
    // $persons -- contains an array of persons from Database
	$persons = [];
    // $personsObject -- contains an array of persons objects
	$personsObject = [];
	// $errorMessae -- contains message with desctiption error
    // gets the value through $_GET['message']
	$errorMessae;
    if (!isset($_POST['category'])) {
        try {
            $persons = $db->query('SELECT * FROM `members`');
        } catch(PDOException $e) {
            DB::mssg('Error query in database. Controller.php ' . __LINE__);
        }
    }
    if ($_POST['category']) {
        $category = $_POST['category'];
        $sql = 'select * from `members` where role="' . $category . '"';
        try {
            $persons = $db->query($sql);
        } catch (PDOException $e) {
            DB::mssg('Error query in database. Controller.php ' . __LINE__);
        }
    }
        // Creating person objects based on data from database
    if (!empty($persons)) {
        foreach ($persons as $person) {
            switch ($person['role']) {
                case 'student':
                    $personsObject[] = new Student(
                        $person['fullName'],
                        $person['phone'],
                        $person['email'],
                        $person['averangeMark'],
                        $person['attendance'],
                        $person['id']
                    );
                    break;
                case 'teacher':
                    $personsObject[] = new Teacher(
                        $person['fullName'],
                        $person['phone'],
                        $person['email'],
                        $person['subject'],
                        $person['id']
                    );
                    break;
                case 'admin':
                    $personsObject[] = new Admin(
                        $person['fullName'],
                        $person['phone'],
                        $person['email'],
                        $person['workingDay'],
                        $person['id']
                    );
                    break;
            } // end switch
        }
    } // end if
	if (isset($_GET['message'])) {
		$errorMessage = 'Message: ' . htmlspecialchars($_GET['message']);
	}

