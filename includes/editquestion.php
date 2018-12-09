<?php
$instid=$_SESSION['inst_id'];
include 'includes/conn.php';
?>

<div class="test_creation">
<table class="table table-responsive  table-hover">
<th colspan="3" style="text-align: center;">
<h3 class="test_creation_header">POST NEW TEST </h3></th>
<tr>
<td>
<label class="label label-primary ">Course:<select class="course opt">
<?php
$sql="select * from course_code";
$r=$conn->query($sql);
while ($a=$r->fetch_assoc()) {
echo "<option value=".$a['course_id'].">".$a['course_name']	."</option>";
}
?>
</select>
</label>
</td><td>
<label class="label label-primary ">subject:<select class="subject opt">
<?php
$sql="select * from subject";
$r=$conn->query($sql);
while ($a=$r->fetch_assoc()) {
echo "<option value=".$a['sub_id'].">".$a['subject_name']	."</option>";
}
?>
</select>
</label></td>
<td>
<input type="hidden" name="instid" value="<?php echo $instid; ?>">
<label class="label label-primary">test name:<input type="text" name="test_name" class="test_name opt"></label></td></tr><tr><td>
<label class="label label-primary">total no of Question:<input type="number" name="no_of_question" class="no_of_question opt"></label></td><td>
<label class="label label-primary">duration:<input type="number" name="duration" class="duration opt">minuts</label></td><td>
<label class="label label-primary">marks for each Question:<input type="number" name="mfeq" class="mfeq opt"></label></td></tr><tr><td>
<label class="label label-primary">Active:&nbsp;<input type="radio" name="tflag" class="tflag opt" value="1"></label>&nbsp;<label class="label label-primary">Deactive:&nbsp;<input type="radio" name="tflag" class="tflag opt" value="0"></label></td><td >
<label class="label label-primary">Public:&nbsp;<input type="radio" name="tstatus" class="tstatus opt" value="1"></label>&nbsp;<label class="label label-primary">Private:&nbsp;<input type="radio" name="tstatus" class="tstatus opt" value="0"></label></td></tr>

<tr><td colspan="3" style="text-align: center;">
<button class="btn btn-success create_test" style="width: 50%">create test</button>
<div class="errormessage"></div>
</td></tr></table></div>
<div class="question_post_area">
	
</div>
<div class="qsubmit" style="padding: 0px 20% 0px 20%; display: none;">
<input type="hidden" name="testid" class="test_id_to_post" value="">
	<input type="button" class="btn btn-primary qsub btn-block" value="submit" name="qsub">
	<br>
	<div class="qposterror"></div>
</div>
<script type="text/javascript" src="js/testpost.js"></script>