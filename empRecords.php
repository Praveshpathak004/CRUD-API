<?php

require_once __DIR__ . '/connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Emp Record ::</title>
</head>

<body>
    <h1>Employee Table</h1>
    <hr />
    <table border="1" rules="all">
        <thead>
            <tr>
                <th>Sr No.</th>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Department</th>
                <th>Salary</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $sql = "SELECT * FROM emp";
            $resultSet = mysqli_query($conn, $sql);
            $row_count = mysqli_num_rows($resultSet);
            ?>
            <?php if ($row_count > 0): ?>
                <?php $i = 1; ?>
                <?php while ($row = mysqli_fetch_assoc($resultSet)): ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['dept']; ?></td>
                        <td><?php echo $row['salary']; ?>.00 INR.</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    <?php $i++; ?>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="9" style="text-align:center;">
                        <b>Record Not Found</b>
                    </td>
                </tr>
            <?php endif; ?>

        </tbody>
    </table>

</body>

</html>