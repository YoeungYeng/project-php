<?php
include("main.php");
include("../connection/conn.php");

$conn = conn();
?>

<div class="container">
    <div>
        <?php
            $select_string = "SELECT * FROM `tbl_employees` WHERE activate = 1";
            $result = $conn->query($select_string);
        ?>
        <a href="add_employee.php" class="btn btn-primary btn-sm active" style="margin-bottom: 10px;"> <span><i class="fa-solid fa-user-plus"></i></span> Add Employee </a>
        <table class="table table-bordered table-hover table-condensed table-striped">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Activity</th>
            </tr>
            <?php
        
        while ($row = $result->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row["employee_id"]; ?></td>
                <td><?php echo $row["first_name"]; ?></td>
                <td><?php echo $row["last_name"]; ?></td>
                <td><?php echo $row["gender"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['employee_id']; ?>" class="btn btn-warning"> <span class="glyphicon glyphicon-pencil"></span> Edit</a>
                    <a href="delete_employee.php?id= <?php echo $row['employee_id']; ?>" class="btn btn-danger"> <span class="glyphicon glyphicon-trash"></span> Delete</a>
                </td>
            </tr>


            <?php
        }
        $conn->close();
        ?>
        </table>
    </div>
</div>