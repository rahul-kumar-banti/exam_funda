<?php
session_start();
include 'conn.php';
if (isset($_POST['noq'])) {
	$courseid=$_POST['courseid'];
		$subjectid=$_POST['subjectid'];
		$courseid=$_POST['courseid'];
		$instid=$_POST['instid'];
		$tname=$_POST['tname'];
		$noq=$_POST['noq'];
		$duration=$_POST['duration'];
		$mfeq=$_POST['mfeq'];
		$tflag=$_POST['tflag'];
		$tstatus=$_POST['tstatus'];
		date_default_timezone_set('asia/kolkata');
		$ptime=date('d/m/y');
		$tcode=uniqid();
		$sql = "INSERT INTO `test` (`test_id`, `test_code`, `test_course_id`, `test_sub_id`, `test_inst_id`, `test_name`, `test_no_of_question`, `test_duration`, `test_marks_for_each`, `test_posted_date`, `test_flag`, `test_privecy`) VALUES (NULL,'$tcode','$courseid', '$subjectid', '$instid', '$tname', '$noq', '$duration', '$mfeq','$ptime', '$tflag','$tstatus')";
		if($conn->query($sql))
		{
			$sql="select test_id from test where test_code='$tcode'";
			$tc=$conn->query($sql);
			while ($a=$tc->fetch_assoc()) {
				 $tid=$a['test_id'];
				 echo $tid; 

			}
			$nheader="new test : ".$tname;
			$notice_content="it is notify that new test has been posted please visit";
			$link="question.php?tid=".$tid."&course_code=".$courseid."&sub=".$subjectid;
			$sql="insert into notice (inst_id,notice_header,notice_content,notice_time,notice_date_from,status,link) values('$instid','$nheader','$notice_content','$ptime','$ptime','$tflag','$link')";
			$conn->query($sql);

		}


$conn->close();
}

