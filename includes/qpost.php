<?php
include 'conn.php';
if (isset($_POST['tid'])) {
	$tid=$_POST['tid'];
	$question=$_POST['question'];
	$opt1=$_POST['opt1'];
	$opt2=$_POST['opt2'];
	$opt3=$_POST['opt3'];
	$opt4=$_POST['opt4'];
	$hints=$_POST['hints'];
	$answer=$_POST['answer'];
	$courseid=$_POST['courseid'];
	$subjectid=$_POST['subjectid'];
	$sql="INSERT INTO `question` (`q_id`, `test_id`, `course_id`, `sub_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `hints`) VALUES (NULL, '$tid', '$courseid', '$subjectid', '$question', '$opt1', '$opt2', '$opt3', '$opt4', '$answer', '$hints')";
$conn->query($sql);

}

?>