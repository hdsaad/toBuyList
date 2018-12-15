<?php
    include "db.php";

    $user=$_SESSION['user'];

    $query=mysqli_query($con,"SELECT * FROM `user_task` WHERE `username`='$user'");

    $data=array();

    while($row = mysqli_fetch_assoc($query))
    {
        $data[] = $row;
    }

    echo json_encode($data);
    die();

?>