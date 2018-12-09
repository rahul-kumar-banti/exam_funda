<div class="row">
<?php 
include "includes/conn.php";
$sql="select * from test where test_course_id='$course_code'&& test_sub_id='$sub'";
$r=$conn->query($sql);
if($r->num_rows>0){
while ($a=$r->fetch_assoc()) {
	$test_id=$a['test_id'];
	$test_name=$a['test_name'];
	$tnoq=$a['test_no_of_question'];
	$tdu=$a['test_duration'];
	$tpdt=$a['test_posted_date'];
$addr="question.php?tid=".$test_id."&course_code=".$course_code."&sub=".$sub;
?>

<div class="col-md-4 test_module_area">
		<div class="test_title">
				<div class="test_title_show"><?php echo $test_name; ?></div>
				<div class="test_duration"><spn class="badge"><?php echo  $tdu."mint and ".$tnoq ."question"; ?></span></div>
				
		</div>
		<div class="test_start">
				<div class="test_post_date "><button class="btn btn-primary"><?php echo $tpdt; ?></button></div>
     			<div class="test_start_btn"><a href="<?php echo $addr; ?>" class="btn btn-block btn-primary">start <span class="glyphicon glyphicon-arrow-right"></span></a></div>
		</div>
	
</div>

<?php
}
}
else
{
	?>
	<div class="ermsg label-warning" style="color: red; font-size: 42px; ">SORRY NO TEST ARE ARE AVILABLE FOR THIS MODULE<BR>WE ARE WORKING ON IT PLEASE KEEP VISITING.......<BR>THANKS </div>
	<?php
}
?>

</div>