<?php
require_once __DIR__ . '/connect.php';

$submitBtn = isset($_POST['submit']) ? $_POST['submit'] : "";
if (isset($submitBtn) and !empty($submitBtn)) {
    $emp_name = trim($_POST['emp_name']);
    //echo $emp_name;
    $emp_email = trim($_POST['emp_email']);
    //echo $emp_email;
    $emp_pass = trim($_POST['emp_pass']);
    //echo $emp_pass;
    $emp_cnf_pass = trim($_POST['emp_cnf_pass']);
    // echo $emp_cnf_pass;
    $emp_mobile = trim($_POST['emp_mobile']);
    //echo $emp_mobile;
    $emp_dpt = trim($_POST['emp_dpt']);
    //echo $emp_dpt;
    $emp_salary = trim($_POST['emp_salary']);
    //echo $emp_salary;
    //Password Check match with confirm password
    if ($emp_pass == $emp_cnf_pass) {
        //echo 'matched';
    } else {
        echo 'Password does not matched';
        exit;
    }

    $enc_pass = md5($emp_pass); //encrypted Password.
    $insertSQL = "INSERT INTO emp(name,email,password,mobile,dept,salary) values('$emp_name','$emp_email','$enc_pass','$emp_mobile','$emp_dpt','$emp_salary')";
    try {
        if (mysqli_query($conn, $insertSQL)) {
            $inserted_id = mysqli_insert_id($conn);
            if ($inserted_id > 0) {
                echo 'Record Inserted Successfully';
                header("Location:empRecords.php"); //Redirect to show Record

            } else {
                echo 'Cannot Insert the Record';
            }
        } else {
            throw new mysqli_sql_exception();
        }
    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
        echo 'Query Error';
    }

} else {
    header("Location:registerEmp.php");
}





?>