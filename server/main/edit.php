<?php
    include("../connection/conn.php");
    include("main.php");
    
    $conn = conn();
    $id = $_GET["id"];
    $select_string = "SELECT * FROM `tbl_employees` WHERE employee_id = '$id'";
    $result = $conn->query($select_string);
    $row = $result->fetch_assoc();

    $first_name = $row["first_name"];
    $last_name = $row["last_name"];
    $gender = $row["gender"];
    $email = $row["email"];
    $phone = $row["phone"];
    // $activate 
    // echo $first_name. " ". $last_name;

    // close connection
    $conn->close();
?>

<?php
// header("Location: ./home.php");
?>

<div class="container" style="width: 500px; height: 550px;background: #e6e6e6; border-radius: 5px 7px; box-shadow: 1px 1px 4px 2px rgb(209, 209, 209);">
    <div class="row">
        <h1 style="font-size: 24px; text-align: center; font-family: 'Courier New', Courier, monospace;">Edit New
            Employee Form</h1>
        <div class="col-12 " style="padding: 10px 15px;">
            <form action="editAction.php" method="post">
                <div class="form-group mb-3">
                    <input required type="hidden" name="id" class="form-control" id="id" placeholder="First Name">
                    <label for="exampleInputEmail1">First Name</label>
                    <input required type="text" value="<?php echo $first_name;  ?>" name="txt_first_name" class="form-control" id="exampleInputFirstName" placeholder="First Name">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input required type="text" value="<?php echo $last_name;  ?> " name="txt_last_name" class="form-control" id="exampleInputLastName" placeholder="Last Name">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputFile">Select Gender</label>
                    <select class="form-control" name="txt_gender">
                        <option value="Male" <?php echo ($gender == "Male")? "check": ""; ?> >Male</option>
                        <option value="Female" <?php echo ($gender == "Female")? "check": ""; ?> >Female</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail">Email</label>
                    <input required type="email" value="<?php echo $email;  ?>" name="txt_email" class="form-control" id="exampleInputEmail" placeholder="example@gmail.com">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail">Phone</label>
                    <input type="tel" name="txt_phone" value="<?php echo $phone;  ?>" class="form-control" id="Phone" placeholder="xxx-xxx-xxx">
                </div>
                <div class="form-group mb-3">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="chk_active"> Active
                        </label>
                    </div>
                </div>
                <button type="submit" name="btn_submit" class="btn btn-default form-control">Submit</button>
            </form>
        </div>
    </div>
</div>