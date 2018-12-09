<?php
include_once("includes/conn.php");

if(isset($_FILES['file1']))
{
	$file_name="images/uploads/". $_FILES["file1"]["name"];

 if(move_uploaded_file($_FILES["file1"]["tmp_name"],$file_name))

 {
 	echo $file_name;


}
}
?>