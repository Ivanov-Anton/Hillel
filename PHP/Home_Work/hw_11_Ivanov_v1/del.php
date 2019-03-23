<?php 
    require_once('class/DB.php');
    $db = DB::getConnect();
    $sql = 'DROP table `members`';
    try {
        $db->exec($sql);
        DB::mssg('All data successfully deleted');
        if ($argc > 0) {
            echo 'All data successfully deleted';
        }
    } catch (PDOException $e) {
        DB::mssg('The database is not deleted', $e);
        if ($argc > 0) {
            echo 'The database is not deleted';
        }
    }