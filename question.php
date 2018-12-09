<?php
session_start();
include 'includes/conn.php';
if(isset($_GET['tid']))
{
	
	$course_code=$_GET['course_code'];
	$sub=$_GET['sub'];
	$test_id=$_GET['tid'];
}
else
{
header("location:index.php?login=login_here");	
}
if(!isset($_SESSION['user']))
{

	//header("location:index.php?login=login_here");

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
	<link rel="stylesheet" type="text/css" href="css/question_paper.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/reg.js"></script>
	
<style type="text/css">




</style>
</head>
<body>
<div class="exam-sub-option"></div>
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
	<div class="exam_instruction col-md-12">
		<?php
         if(isset($test_id))
         	include 'includes/conn.php';
         	//$sql="select * from test where test_id='$test_id'&& test_course_id='$course_code'&&test_sub_id='$sub'";
         	$sq="SELECT a.course_name, b.subject_name,c.test_name,c.test_no_of_question,c.test_duration,c.test_marks_for_each,c.test_posted_date ,d.inst_name FROM course_code as a,subject as b,test as c ,istitute as d WHERE a.course_id=c.test_course_id&& b.sub_id=c.test_sub_id&&c.test_id='$test_id'&&d.inst_id=c.test_inst_id";
        
         $r=$conn->query($sq);
         if($r->num_rows<=0)
         {
          echo "<div class='test_heading'>sory no any test avilable</div>";
         }
         while($a=$r->fetch_assoc())
         {
             $course_name=$a['course_name'];
            $subject_name=$a['subject_name'];
          $inst_name=$a['inst_name'];
          $test_name=$a['test_name'];
         	 $total_no_question=$a['test_no_of_question'];
         	$duration=$a['test_duration'];
         	 $marks_for_each=$a['test_marks_for_each'];
         	 $posted_date=$a['test_posted_date'];
         	 $fm=$total_no_question*$marks_for_each;
         	?>
 
         	<div class="test_heading"><?php echo $test_name; ?></div>
         	<div class="subject_name"><span class="ttitlt">subject:</span><?php echo $subject_name;?>  &nbsp;&nbsp;&nbsp;<span class="ttitlt">course:</span><?php echo $course_name;?>&nbsp;&nbsp;&nbsp; <span class="ttitlt">total no question:</span><?php echo $total_no_question;?>&nbsp;&nbsp;&nbsp;<span class="ttitlt">duration:</span><?php echo $duration;?>mints&nbsp;&nbsp;&nbsp;<span class="ttitlt">FM:</span><?php echo $fm;?>&nbsp;&nbsp;&nbsp;<span class="ttitlt">posted date:</span><?php echo $posted_date;?>&nbsp;&nbsp;&nbsp;<span class="ttitlt">posted by:</span><?php echo $inst_name;?></div>
         		<div class="instruction">
         			<ul type="star">
         				<li><span class="imt">*</span>attmpt all the given question</li>
         				<li><span class="imt">*</span>do not refresh page
         
         			<div class="time">
			<span class="total_time" id='<?php echo $duration; ?>'><?php echo $duration; ?> mints</span>/<span class="mints"></span>:<span class="seconds"></span>
			
		</div>
		<button class="start_test btn btn-success">start</button>
		<script type="text/javascript">
	
		</script>
</li></ul>
         		</div>
 
         	<?php
         }


		?>
		
<?php include "includes/question_list.php"; ?>

	</div>
	</div>
	</div></div>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
		
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