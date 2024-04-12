<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Register Employee</h1>
    <form action="register_emp_controller.php" method="POST">
        <p>Enter Name: <input type="text" name="emp_name" /></p>
        <p>Enter Email: <input type="email" name="emp_email" /></p>
        <p>Enter Password: <input type="password" name="emp_pass" /></p>
        <p>Enter confirm Password: <input type="password" name="emp_cnf_pass" /></p>
        <p>Enter mobile: <input type="tel" name="emp_mobile" /></p>
        <p>select department :
            <select name="emp_dpt">
                <option value="">Select</option>
                <option value="hr">HR</option>
                <option value="developer">Developer</option>
                <option value="manager">Manager</option>
                <option value="tester">Tester</option>
            </select>
        </p>
        <p>Add Salary: <input type="number" name="emp_salary" /></p>
        <input type="submit" name="submit" value="Register Emp">
        <form>
</body>

</html>