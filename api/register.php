<?php
    include "db.php";
    $username = $_POST['User'];
    $password = $_POST['Password'];

    $query=mysqli_query($con, "SELECT * FROM `user` WHERE `username`='$username'");
    $result=intval(mysqli_num_rows($query));
    if($result > 0)
    {
        echo json_encode("Username is taken.");
        die();
    }
    else
    {
        mysqli_query($con, "INSERT INTO `user`(`username`, `password`) VALUES ('$username', '$password')");
        echo json_encode("Registration Successful");
        die();
    }
?>