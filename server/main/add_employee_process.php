<?php
    include("../connection/conn.php");
    // include("./main.php");

    $conn = conn();
    $first_name = $_POST["txt_first_name"];
    $last_name = $_POST["txt_last_name"];
    $gender = $_POST["txt_gender"];
    $email = $_POST["txt_email"];
    $phone = $_POST["txt_phone"];
    $activate = $_POST["chk_active"];
    // convert active
    $status = 1;

    if($activate == 'on'){
        $status = 1;
    }else{
        $status = 0;
    }

    // insert to database
    $insert_string =
        "INSERT INTO tbl_employees(first_name, last_name, gender, email, phone, activate) VALUES('$first_name', '$last_name', '$gender', '$email', '$phone', '$status')";
    // put to database
    if($conn->query($insert_string)){
        ?>
            <script>
                alert("Insert sucessful!");
            </script>
        <?php
        
    }else{
        echo "Insert to database error.";
    }


    // close connection
    $conn->close();
    header("Location: home.php");
    // echo"First Name:". $first_name." Last Name:". $last_name." Gender:".$gender." Email:". $email . " Phone". $phone . " Active:". $status;

?>