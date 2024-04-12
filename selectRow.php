<?php

require_once __DIR__ . '/connect.php';
$selectSql = "SELECT * from student";

try {
    $resultSet = mysqli_query($conn, $selectSql);
    $row_count = mysqli_num_rows($resultSet); //Numerical Array
    if ($row_count > 0) {
        //echo 'Record Found Successfully';
        while ($row = mysqli_fetch_row($resultSet)) {
            echo 'ID =' . $row[0];
            echo PHP_EOL;
            echo 'Name =' . $row[1];
            echo PHP_EOL;
            echo 'Email =' . $row[2];
            echo PHP_EOL;
            echo 'mobile =' . $row[3];
            echo PHP_EOL;
            echo "===================================";
            echo PHP_EOL;
        }

    } else {
        echo 'No Record Found';
    }

} catch (mysqli_sql_exception $e) {
    echo 'Query Error';
    echo $e->getMessage();
}