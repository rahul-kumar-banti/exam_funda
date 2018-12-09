<?php
session_start();
?>
<?php

if(isset($_COOKIE['user_id']))
{
	$_SESSION['user_id']=$_COOKIE['user_id'];
	$_SESSION['inst_id']=$_COOKIE['inst_id'];
	$_SESSION['act_type']=$_COOKIE['act_type'];
	$_SESSION['email']=$_COOKIE['email'];
	$_SESSION['user']=$_COOKIE['user'];
	$_SESSION['pass']=$_COOKIE['pass'];
	$_SESSION['img']=$_COOKIE['img'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>exam funda</title>
	<meta charset="utf-8">
	
	<meta  name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/ptheme.css">
	<link rel="stylesheet" type="text/css" href="css/reg.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/instreg.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/reg.js"></script>
	<script type="text/javascript" src="js/pace.min.js"></script>
	
<style type="text/css">




</style>
</head>
<body>
<div class="exam-sub-option">
<button class="close_option btn  btn-block btn-danger" style="height:30px; padding:2px;color: white; ">&times;</button>
        <a href="" class="btn btn-primary btn1 btn-block">combine</a>
       <a href="" class="btn btn-primary btn2 btn-block">math</a>
       <a href="" class="btn btn-primary btn3 btn-block">reasoning</a>
       <a href="" class="btn btn-primary btn4 btn-block">english</a>
       <a href="" class="btn btn-primary btn5 btn-block">computer</a>
       
        </div>
<?php include 'includes/login.php';

include 'includes/social_plug.php'; 
include_once("registration.php");
include "includes/institute_reg.php";
?>
<!-- head section -->
<div class="container">

<?php include 'includes/header.php'; 

?>
</div>
<!-- nevigation section -->
	<div class="container">
	<?php include 'includes/nev.php'; ?>
	</div> 

<!-- body first part section-->
<div class="container">
<div class="row"><div class="col-md-8 ">
<?php include 'includes/body_p1_p1.php'; ?>

</div>
	<div class="col-md-4 " >
		<?php include 'includes/user_show.php'; ?>
	</div>
</div></div>
<!-- body secon part section -->
<div class="container">
<div class="row">
	<div class="col-md-8 exam-topic" id="test">
	<?php include 'includes/exam_option.php';  ?>
	</div>
	<div class="col-md-4 ">
	<?php include 'includes/notice_dsp.php'; ?>
		

	</div>

</div>
	







</div>
<!-- footer -->
<div class="container">
	<?php include 'includes/footer.php'; ?>
	</div>
	<?php
	if(isset($_GET['login']))
{
	
	?>
<script type="text/javascript">
	$(".login-popup").fadeIn();
	var url = window.location.href;
var params = url.split('?');
//var email=params.split('=');
var em=params[1];
var email=em.split('=');
var  loginmail=email['1'];
$('#email').val(loginmail);
</script>

<?php
}
?>
<?php
	if(isset($_GET['reg']))
{
	
	?>
<script type="text/javascript">
	$(".reg_popup").fadeIn();
	
</script>

<?php
}
?>

</body>
</html>