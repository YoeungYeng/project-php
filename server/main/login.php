<?php
    include("./main.php");
    include("../connection/conn.php");

    $conn = conn();

?>


<div class="container"
    style="width: 500px; height: 450px; background: #e6e6e6; border-radius: 5px 7px; box-shadow: 1px 1px 4px 2px rgb(209, 209, 209);">
    <div class="row">
        <h1 style="font-size: 24px; text-align: center; font-family: 'Courier New', Courier, monospace; margin-bottom: 15px;">
            Form Login
        </h1>
        <div class="col-12 " style="padding: 10px 15px;">
            <form action="add_employee_process.php" method="post">
                <div class="form-group mb-3">
                    <div class="input-group">
                        <span class="glyphicon glyphicon-user input-group-addon"></span>
                        <input type="email" name="txt_email" class="form-control" id="emails"
                            aria-describedby="inputGroupSuccess1Status">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="email" name="txt_email" class="form-control" id="emails"
                            aria-describedby="inputGroupSuccess1Status">
                    </div>
                </div>

                <button type="submit" name="btn_submit" class="btn btn-default form-control">Login</button>
                <p style="text-align: center; margin-top: 10px;">Don't have an account? <a href="" style="color: green;">Sign up</a></p>
            </form>
        </div>
    </div>
</div>