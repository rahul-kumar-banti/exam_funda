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
	<link rel="stylesheet" type="text/css" href="css/home2.css">
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
	<div class="col-md-2 " >
	<!--<div style="position: fixed;top:0px;left:0px;width:7%;">
-->		<?php include 'includes/exam_option2.php'; ?><!--</div> -->
	</div>
	<div class="col-md-10">
	<?php include 'includes/test_module.php'; ?>
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
	if(!isset($_SESSION['user']))
{
	
	?>
<script type="text/javascript" src="js/loginpopup.js">
	
</script>
<?php
}
?>

</body>
</html>