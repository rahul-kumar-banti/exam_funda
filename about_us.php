<?php
session_start();
if(isset($_GET['course_code']))
{
	$course_code=$_GET['course_code'];
	$sub=$_GET['sub'];
}
if(!isset($_SESSION['user']))
{

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>exam funda</title>
	<meta charset="utf-8">
	
	
	<meta  name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/reg.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/test_module.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/reg.js"></script>
	
<style type="text/css">




</style>
</head>
<body>
<div class="exam-sub-option">
<button class="close_option btn  btn-block">&times;</button>
        <a href="" class="btn btn-primary btn1 btn-block">misslenious</a>
       <a href="" class="btn btn-primary btn2 btn-block">math</a>
       <a href="" class="btn btn-primary btn3 btn-block">reasoning</a>
       <a href="" class="btn btn-primary btn4 btn-block">english</a>
       <a href="" class="btn btn-primary btn5 btn-block">computer</a>
       
        </div>
<?php include 'includes/login.php'; 
include_once("registration.php");
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
<div class="row">
	<div class="col-md-4 " >
		<?php include 'includes/user_show.php'; ?>
	</div>
	<div class="col-md-8">
		<?php ?>
	</div>
</div></div>
<!-- body secon part section -->
<div class="container">

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

</body>
</html>