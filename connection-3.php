<?php
//Step : Make Connection to the Database.
define('DB_HOST', '127.0.0.1:3308');
define('DB_USER', 'root');
define('DB_PASSWORD', '1234');
define('DB_NAME', '');
//if db-name is wrong then connection will be wrong, if it is '' empty no issue

try {
    echo 'Try Block.....<br/>';
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($conn) {
        echo 'connection success';
    } else {
        throw new mysqli_sql_exception();
    }
} catch (mysqli_sql_exception $e) {
    echo 'Catch Block Running <br/>';
    echo $e->getMessage(); //Unknown database 'sample'
    echo '<br/>';
    echo mysqli_connect_error(); //Unknown database 'sample'
    echo '<br/>';
    echo mysqli_connect_errno();
    echo '<br/>';
} finally {
    echo 'finally Block Running...<br/>';
    echo mysqli_connect_errno();
    echo '<br/>';
    var_dump(mysqli_connect_error());
    var_dump($conn);

}




?>