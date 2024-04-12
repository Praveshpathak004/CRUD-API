<?php
require_once __DIR__ . '/connect.php';

$pkId = trim(readline('Enter the ID:'));
$name = trim(readline('Enter the name:'));
$email = trim(readline('Enter the email:'));
$mobile = trim(readline('Enter the mobile:'));
try {
    $sql = "Update student set name='{$name}',email='{$email}',mobile='{$mobile}' where id='{$pkId}'";
    if (mysqli_query($conn, $sql)) {
        echo 'Record Updated Successfully';
    } else {
        throw new mysqli_sql_exception();
    }
} catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
    echo PHP_EOL;
    echo 'Update Error ' . mysqli_error($conn);
    exit();
}


?>