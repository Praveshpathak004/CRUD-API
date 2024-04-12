<?php

require_once __DIR__ . '/connect.php';
$selectSql = "SELECT * from student";

try {
    $resultSet = mysqli_query($conn, $selectSql);
    $row_count = mysqli_num_rows($resultSet); //Numerical Array
    if ($row_count > 0) {
        //echo 'Record Found Successfully';
        while ($row = mysqli_fetch_array($resultSet, MYSQLI_BOTH)) { //MYSQLI_NUM, //MYSQLI_ASSOC
            echo 'ID key =' . $row['id'] . " index = 0 :" . $row[0];
            echo PHP_EOL;
            echo 'Name key =' . $row['name'] . " index = 1 : " . $row[1];
            echo PHP_EOL;
            echo 'Email key =' . $row['email'] . " index = : " . $row[2];
            echo PHP_EOL;
            echo 'Mobile key =' . $row['mobile'] . " index = : " . $row[4];
            echo PHP_EOL;
            echo "=========================================================";
            echo PHP_EOL;
        }

    } else {
        echo 'No Record Found';
    }

} catch (mysqli_sql_exception $e) {
    echo 'Query Error';
    echo $e->getMessage();
}