<?php

require_once __DIR__ . '/connect.php';
$name = trim(readline('Enter the name:'));
$email = trim(readline('Enter the email:'));
$password = trim(readline('Enter the password:'));
$mobile = trim(readline('Enter the mobile:'));

$sql = "INSERT INTO student(name,email,password,mobile) values('{$name}','{$email}','{$password}','{$mobile}')";


if (mysqli_query($conn, $sql)) {
    echo 'Query Inserted';
    $newId = mysqli_insert_id($conn);
    echo 'New Id = ' . $newId;
} else {
    echo 'Insert Error ' . mysqli_error($conn);
    exit();
}


?>