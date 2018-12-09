<?php

if(isset($_GET['txt']))
{
$user=$_GET['txt'];
include("includes/conn.php");
$sql="select * from user where user_name='$user'";
$run=$conn->query($sql);
while($a=$run->fetch_assoc())
{
	$user_id=$a['user_id'];
	$dp=$a['disp_name'];
	$act=$a['conf_code'];
	$inst_id=$a['inst_id'];
	$user_email=$a['email'];
}
}
if(isset(($_POST['submit'])))
{
	$cnf=$_POST['conf'];
	if($act==$cnf)
	{
		$sql="update user set conf_cod2='$cnf',status=1 where user_id='$user_id'";
		if($conn->query($sql))
		{
			$sql = "INSERT INTO student_acitve (user_id, inst_id, disp_name, status, login_time, logout_time) VALUES ('$user_id','$inst_id', '$dp',1,'', '')";
			if($conn->query($sql))
			{
				
			header("location:index.php?login=".$user_email);
		}
		}
	}
	else
	{
		$msg="confermation code not matched";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript">
function me() {
	window.close();
	// body...
}
	setInterval("me()",60000*30);


</script>
<link rel="stylesheet" type="text/css" href="css/css1.css">
<link rel="icon" href="images/ricon.png">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/css3.css">
<style type="text/css">
body{
	background-image:url('images/n1.jpg');
	}
	#lfm{
		background-image:url('images/b2.jpg');
	}
	#ftable{
		background-image:url('images/n5.jpg');
	
	}
	

</style>	
</head>
<body>
<div class="loginform container-fluid">
<div id="cfrm">
<div class="row">
	<div class="col-md-4">
	</div>
	<div class="col-md-4" id="tt">
<form  method="post" action="" align="center"><table id="ftable" class="table table-responsive">
<tr><td>
<input class="form-control input-lg" type="text" id="conf" name="conf" placeholder="enter confermation code" autofocus required></td></tr>
<tr>
<td><input class="btn btn-success btn-block" type="submit" name="submit" id="submit" value="submit">
</td></tr></table></form></div>
<div class="col-md-4"></div>
<div text-color="red">  <?php if(isset($msg)){echo $msg; } ?></div>
</div></div></div></body></html>
<?php 

?>