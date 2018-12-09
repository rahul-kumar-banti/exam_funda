<?php
include_once("includes/conn.php");

if(isset($_POST['pass']))
{
	$dp=$_POST['dp'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$institute=$_POST['institute'];	
	$mob=$_POST['mob'];
	$email=$_POST['email'];
	$user_narray=explode("@",$email);
	$user_name=$user_narray[0];
	$user_name=$user_name.uniqid(rand());
	$address=$_POST['address'];
	$file=$_POST['file'];
	$pass=$_POST['pass'];
	date_default_timezone_set('asia/kolkata');
	$date=date('d/m/y h:i:sa');
	$cf=uniqid(rand());
	$conf=fopen("conf.txt","w");
	fwrite($conf,"your confermation code are:".$cf." use this code before 24 hr .thanks for signup /n regard examfunda.com ");
	fclose($conf);

	$pass=md5($pass);
	$pass=sha1($pass);
	$pass=crypt($pass,"funda");
	$target_dir = "images/uploads/";
	$un=uniqid();

$act_type="student";
$sql = "INSERT INTO user (inst_id, user_name, password, email, img, mobile, dob, gender, address, act_type, disp_name, joining_date, conf_code) VALUES ('$institute','$user_name','$pass','$email','$file','$mob','$dob','$gender', '$address', '$act_type','$dp','$date','$cf')";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	if($conn->query($sql))
	{
		echo $user_name;
	}
	else
	{
		echo "problem";
	}

}
$conn->close();
?>