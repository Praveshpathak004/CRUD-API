<?php
require_once __DIR__ . '/connect.php';
$pkId = trim(readline('Enter the ID:'));
$sql = "SELECT * from student where id={$pkId}";

try {
    mysqli_query($conn, $sql);//type : readable  
    $resultSet = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($resultSet);
    if ($row_count > 0) {
        echo $row_count . ', Record Found';
    } else {
        echo 'No Record Found';
    }
} catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
    echo PHP_EOL;
    echo 'Query Error ' . mysqli_error($conn);
    exit();
}


?>