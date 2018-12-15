<?php
    include "db.php";

    $task_id=$_POST['task_id'];

    mysqli_query($con,"DELETE FROM `user_task` WHERE `task_id`='$task_id'");
    die();

?>