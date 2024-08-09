<?php
    require_once("../server/main/main.php");
    // echo"Hello World";
    if(isset($_POST["btn_submit"])){
        $id = $_GET['id'];



        echo $id;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container" style="height: 450px; width: 500px;">
        <form action="">
            <div class="form-group mb-3">
                <input required type="hidden" name="id" class="form-control" id="id" value="1">
                <label for="exampleInputPassword1">Username</label>
                <input required type="text" name="txt_user_name" class="form-control" id="username"
                    placeholder="username">
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputPassword1">Password</label>
                <input required type="password" name="txt_password" class="form-control" id="exampleInputLastName"
                    placeholder="password">
            </div>
            <button type="submit" name="btn_submit" class="btn btn-default form-control">Login</button>
        </form>
    </div>
</body>

</html>