<?php
//allows for cross platform access
header('Access-Control-Allow-Origin: *');
//connection string to the database, ([databaseip],[user],[password],[databasename])
$con = mysqli_connect("den1.mysql6.gear.host","tobuylist","Computer#23","tobuylist") or die ("could not connect database");
session_start();
?>