<?php
include_once("includes/conn.php");
session_start();
echo $_SESSION['user_id'];
session_unset();
	session_destroy();
	setcookie("user_id", "", time() - 3600,"/");
	
	header("location:index.php");
if(isset($_GET['ds']))
{
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=$_SESSION['user_id'];
date_default_timezone_set('asia/kolkata');
$d=date('d/m/y h:i:sa');
 $sql =" UPDATE student_acitve SET status = 0 ,logout_time='$d' WHERE student_acitve.user_id = '$id'";
 
if($conn->query($sql))
{

	session_unset();
	session_destroy();
	setcookie("user_id", "", time() - 3600,"/");
	
	header("location:index.php");
}
else
{
	echo "string";
}
}