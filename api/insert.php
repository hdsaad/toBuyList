<?php
    include "db.php";

    $user=$_SESSION['user'];
    $addTask=$_POST['addTask'];

    mysqli_query($con,"INSERT INTO `user_task`(`username`, `task`) VALUES ('$user','$addTask')");
    die();

?>