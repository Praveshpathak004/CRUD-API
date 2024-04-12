<?php
//Step : Make Connection to the Database.
define('DB_HOST', '127.0.0.1:3308');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'sample_db');
//if db-name is wrong then connection will be wrong, if it is '' empty no issue

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
print_R($conn);







?>