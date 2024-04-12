<?php
//Step : Make Connection to the Database.
define('DB_HOST', '127.0.0.1:3308');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'student_db');
//if db-name is wrong then connection will be wrong, if it is '' empty no issue
define('SHOW_CONN', FALSE);

try {

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($conn) {
        if (SHOW_CONN == TRUE) {
            echo 'connection success';
        }
    } else {
        throw new mysqli_sql_exception();
    }
} catch (mysqli_sql_exception $e) {
    echo 'Connection Error, Error Code : ';
    echo mysqli_connect_errno();
    exit();
}

?>