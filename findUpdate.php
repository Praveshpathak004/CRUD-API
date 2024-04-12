<?php
require_once __DIR__ . '/connect.php';
$pkId = trim(readline('Enter the ID:'));
$sql = "SELECT * from student where id={$pkId}";
try {
    mysqli_query($conn, $sql);//type : readable  
    $resultSet = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($resultSet);
    if ($row_count > 0) {
        //update Logic start
        $name = trim(readline('Enter the name:'));
        $email = trim(readline('Enter the email:'));
        $mobile = trim(readline('Enter the mobile:'));
        try {
            $UpdateSql = "Update student set name='{$name}',email='{$email}',mobile='{$mobile}' where id='{$pkId}'";
            if (mysqli_query($conn, $UpdateSql)) {
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

        //end of update Logic
    } else {
        echo 'No Record Found, Try, Another ID';
    }
} catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
    echo PHP_EOL;
    echo 'Query Error ' . mysqli_error($conn);
    exit();
}


?>