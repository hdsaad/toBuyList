<?php
    include "db.php";
    $username = $_POST['User'];
    $password = $_POST['Password'];

    $query=mysqli_query($con, "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'");
    $result=intval(mysqli_num_rows($query));
    if($result > 0)
    {
        echo json_encode("Login Successful.");
        $_SESSION['user'] = $username;
        die();
    }
    else
    {
        echo json_encode("The username or password you inputted is incorrect.");
        die();
    }


?>