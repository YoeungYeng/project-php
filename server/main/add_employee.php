<?php
include("./main.php");
include("../connection/conn.php");

$conn = conn();
?>

<div class="container"
    style="width: 500px; height: 550px;background: #e6e6e6; border-radius: 5px 7px; box-shadow: 1px 1px 4px 2px rgb(209, 209, 209);">
    <div class="row">
        <h1 style="font-size: 24px; text-align: center; font-family: 'Courier New', Courier, monospace;">Add New
            Employee Form</h1>
        <div class="col-12 " style="padding: 10px 15px;">
            <form action="add_employee_process.php" method="post">
                <div class="form-group mb-3">
                    <input required type="hidden" name="id"
                        class="form-control" id="id" placeholder="First Name">
                    <label for="exampleInputEmail1">First Name</label>
                    <input required type="text" name="txt_first_name" class="form-control" id="exampleInputFirstName"
                        placeholder="First Name">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input required type="text" name="txt_last_name" class="form-control" id="exampleInputLastName"
                        placeholder="Last Name">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputFile">Select Gender</label>
                    <select class="form-control" name="txt_gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail">Email</label>
                    <input required type="email" name="txt_email" class="form-control" id="exampleInputEmail"
                        placeholder="example@gmail.com">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail">Phone</label>
                    <input type="tel" name="txt_phone" class="form-control" id="Phone" placeholder="xxx-xxx-xxx">
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