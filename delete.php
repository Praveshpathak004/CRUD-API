<?php
require_once __DIR__ . '/connect.php';
$pkId = trim(readline('Enter the ID:'));

try {
    $sql = "DELETE FROM student where id='{$pkId}'";
    if (mysqli_query($conn, $sql)) {
        $affected_rows = mysqli_affected_rows($conn);
        if ($affected_rows > 0) {
            echo 'Record Deleted Successfully';
        } else {
            echo 'Record Not Deleted Successfully';
        }

    } else {
        throw new mysqli_sql_exception();
    }
} catch (mysqli_sql_exception $e) {
    echo $e->getMessage();
    echo PHP_EOL;
    echo 'Delete Error ' . mysqli_error($conn);
    exit();
}


?>