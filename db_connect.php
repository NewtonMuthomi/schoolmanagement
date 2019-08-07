<?php
$db=mysqli_connect('localhost','root','');

if(!$db){
    die("Database db Failed" . mysqli_error($db));
}

$select_db=mysqli_select_db($db,'schoolmanagement');

if(!$select_db){
    die("Database Selection Failed" . mysqli_connect_error($db));
}



