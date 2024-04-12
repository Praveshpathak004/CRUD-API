<?php
//How to connect to DB
define('DB_HOST', 'localhost:3308'); //127.0.0.1:3306
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'student_db2');
define('DEBUG', FALSE);
$conn = null;
try {
    //Mysql Reporting 
    mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);
    if ($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)) {
        if (DEBUG == TRUE) {
            echo 'Connection Created';
            echo '<pre>';
            print_r($conn); //connection String Object;
            echo '</pre>';
            exit();
        }
    } else {
        throw new Exception('Connection Cannot Be Created.');
    }
} catch (Exception $e) {
    echo 'Connection Error ' . $e->getMessage();
    echo mysqli_connect_error();
}



?>