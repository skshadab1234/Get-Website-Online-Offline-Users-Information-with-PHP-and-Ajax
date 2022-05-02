<?php
session_start();
include('database.inc.php');
$uid=$_SESSION['UID'];
$time=time()+10;
$res=mysqli_query($con,"update user set last_login=$time where id=$uid");
?>