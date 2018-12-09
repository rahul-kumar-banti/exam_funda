<?php 
session_start();
$instid= $_SESSION['inst_id'];
$usrid=$_SESSION['user_id'];
$user_name=$_SESSION["user"];
date_default_timezone_set("asia/kolkata");
$atmpt_date=date("d/m/y h:i:sa"); 
include 'includes/conn.php';
 
if(isset($_POST['obtain_marks']))
{
				$test_id=$_POST['test_id'];
				$course_name=$_POST['course_name'];
				$sub_name=$_POST['sub_name'];
                $no_of_question=$_POST['no_of_question'];
                $total_attempt=$_POST['total_attempt'];
                $correct_option=$_POST['correct_option'];
                $total_marks=$_POST['total_marks'];
                $obtain_marks=$_POST['obtain_marks'];
                $percent=$_POST['percent'];
               //$sql="insert into result(user_id,inst_id,test_id,course_name,sub_name,no_of_question,total_attempt,correct_option,total_marks,obtain_marks,percent,user_name,atmpt_date) values('$usrid','$instid','$test_id','$course_name','$sub_name','$no_of_question','$total_attempt','$correct_option','$total_marks','$percent','$user_name','$atmpt_date')";
                 $sql = "INSERT INTO `result` (`r_id`, `user_id`, `inst_id`, `test_id`, `course_name`, `sub_name`, `no_of_question`, `total_attempt`, `correct_option`, `total_marks`, `obtain_marks`, `percent`, `user_name`, `atmpt_date`) VALUES (NULL,'$usrid','$instid','$test_id','$course_name','$sub_name','$no_of_question','$total_attempt','$correct_option','$total_marks','$obtain_marks','$percent','$user_name','$atmpt_date')";
               if($conn->query($sql)){
               	echo "success";
               }
               else
               {
               	echo "fail";
               }
  
                //echo "<p>".$instid."<br>".$usrid."<br>".$user_name."<br>".$atmpt_date."<br>".$test_id."<br>".$course_name."<br>".$sub_name."<br>".$no_of_question."<br>".$total_attempt."<br>".$correct_option."<br>".$total_marks."<br>".$obtain_marks."<br>".$percent."%<br></p>";
                  
}


?>	