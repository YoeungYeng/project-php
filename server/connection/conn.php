<?php
    function conn(){
        $server = "localhost";
        $username = "root";
        $password = "";
        $_db = "db_employees";

        $conn = new mysqli($server, $username, $password, $_db);
        if ($conn->connect_error) {
            die("error database". $conn->connect_error);
        }
        "</br>";
        // echo("Connect to database succesful 0_0\n"); 

        return $conn;
    }
?>