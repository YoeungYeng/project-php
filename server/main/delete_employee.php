<?php
    include("../connection/conn.php");
    // include("../main/main.php");

    $conn = conn();
    $id = $_GET["id"];
    $delete_string = "UPDATE tbl_employees SET activate = 0 WHERE employee_id =$id";

    $result = mysqli_query($conn, $delete_string);

    $conn->close();
    header('Location:home.php');
?>
