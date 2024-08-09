<?php
    include("../connection/conn.php");
    $conn = conn();
        
        // echo $first_name. " ". $last_name;
    
    // echo"Hello World";
    if(isset($_POST["btn_submit"])){
        $id = $_POST['id'];
        $first_name = $_POST['txt_first_name'];
        $last_name = $_POST['txt_last_name'];
        $gender = $_POST["txt_gender"];
        $phone = $_POST['txt_phone'];
        $email = $_POST['txt_email'];
        //
        $update_string =
            "UPDATE `tbl_employees` SET `first_name`='$first_name',`last_name`='$last_name' ,`gender`='$gender',`email`='$email',`phone`='$phone' WHERE `employee_id` = '$id' ";

        $result = $conn->query($update_string);
        
        if ($result) {
            echo "Edit successful";
            header("Location: home.php");
            exit; // Add this line to stop the script execution after the redirect
        } else {
            echo "Edit failed: " . mysqli_error($conn);
        }
        
    }
    
    $conn->close();
    

?>