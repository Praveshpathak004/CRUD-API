<?php

require_once __DIR__ . '/connect.php';
$pkId = trim(readline('Enter the ID:'));
$selectSql = "SELECT * from student where id='{$pkId}'";

try {
    $resultSet = mysqli_query($conn, $selectSql);
    $row_count = mysqli_num_rows($resultSet);
    if ($row_count > 0) {
        //echo 'Record Found Successfully';
        if ($row = mysqli_fetch_assoc($resultSet)) {
            echo 'ID =' . $row['id'];
            echo PHP_EOL;
            echo 'Name =' . $row['name'];
            echo PHP_EOL;
            echo 'Email =' . $row['email'];
            echo PHP_EOL;
            echo 'mobile =' . $row['mobile'];
            echo PHP_EOL;
        }

    } else {
        echo 'No Record Found';
    }

} catch (mysqli_sql_exception $e) {
    echo 'Query Error';
    echo $e->getMessage();
}