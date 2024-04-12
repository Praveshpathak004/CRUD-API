<?php
require_once __DIR__ . '/connect.php';
$pkId = trim(readline('Enter the ID:'));
$sql = "SELECT * from student where id={$pkId}";

try {
    mysqli_query($conn, $sql);//type : readable  
    $resultSet = mysqli_query($conn, $sql);
    $count = $resultSet->num_rows;
    echo 'Using num_rows properties of $result_set = ' . $count;
    $row_count = mysqli_num_rows($resultSet);
    echo PHP_EOL;
    echo 'Using Functions of mysqli_num_rows() = ' . $row_count;
} catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
    echo PHP_EOL;
    echo 'Query Error ' . mysqli_error($conn);
    exit();
}


?>