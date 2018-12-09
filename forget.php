<?php 
session_start();

include 'includes/conn.php';
$errormsg="";
$cf="submit";
$ty="hidden";
$ftype="text";
$inpt="hidden";
$tp="enter email id";
$i=0;
if(isset($_POST['submit']))
{
			$k=0;
			$user=$_POST['uid'];
			$_SESSION['user_frgt']=$user;
		$sql="select * from user where email='$user'";
		$run=$conn->query($sql);
	while($a=$run->fetch_assoc())
	{
		$cuser=$a['email'];
		$k++;
	}
	if($k>0)
	{
	$tp="enter confermation code";
$cf="confurm";
$usr=$_SESSION['user_frgt'];	
$uidd=uniqid(rand());
$sq="update user set conf_code='$uidd' where email='$usr'";
$conn->query($sq);
$sub="confermation code";
$msg="your confurmation code is ".$uidd;
$hdr="exam funda";
//mail($user,$sub,$msg,$hdr);
$myfile = fopen("forgetpasconf.txt", "w");
fwrite($myfile,$msg);
	}
	else
	{
		$errormsg="no account related to this email address you need to sign up";
	}

}
if(isset($_POST['confurm']))
{
	$us=$_SESSION['user_frgt'];
	$cnf=$_POST['uid'];
$sql="select * from user where email='$us'";
		$run=$conn->query($sql);
	while($a=$run->fetch_assoc())
	{
		$f=$a['conf_code'];
	}
	if($cnf===$f)
	{
		$tp="enter new password";
		$cf="change";
		$inpt="conferm password:";
		$ty="password";
		$ftype="password";

	}
	else{
		$errormsg="try again  enter code is no valid";
	}
			
	
}
if(isset($_POST['change']))
{
	
	$uu=$_POST['uid'];
	$uuu=$_POST['un'];
	if($uu===$uuu)
	{
		$us=$_SESSION['user_frgt'];
		$password=md5($uu);
		$password=sha1($password);
		$password=crypt($password,"funda");
		$sq="update user set password='$password' where email='$us'";
if($conn->query($sq))
{
$er="password successfully change";
$addr="refresh:5;index.php?login=".$us;
header($addr);
}
else{
	$errormsg="unable to change password";
}
	}
	else{
		$tp="enter new password";
		$cf="change";
		$inpt="conferm password:";
		$ty="text";
	
		$errormsg="password donot match";
	}
}
?>
<html>
<head>
<title>login form</title>
<link rel="stylesheet" type="text/css" href="css/css1.css">
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
<input class="form-control input-lg" type="<?php echo $ftype; ?>" id="uid" name="uid" placeholder="<?php echo $tp; ?>" autofocus required></td></tr>
<tr><td><input class="form-control input-lg" type="<?php echo $ty; ?>" placeholder="<?php echo $inpt;?>" name="un"  required>
</td></tr>
<tr>
<td><input class="btn btn-success btn-block" type="submit" name="<?php echo $cf; ?>" id="login" value="<?php echo $cf; ?>">
	<a href="index.php?reg=t"  class="btn btn-success btn-block">sign up here!</a>
	<a href="index.php"  class="btn btn-info btn-block">go to home</a>
<?php if(isset($_POST['submit']))
{
	?>

	<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
    40%
  </div>
</div>
<?php }?>
<?php if(isset($_POST['confurm']))
{
	?>

	<div class="progress">
  <div class="progress-bar process-bar-danger progress-bar-striped active" role="progressbar"
  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
    70%
  </div>
</div>
<?php }?>
<?php if(isset($_POST['change']))
{
	?>

	<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
    90%
  </div>
</div>
<?php }?>


</td></tr>
</table>
</form>
<p id="er"><?php echo $errormsg;  ?></p> </br>
</div>
<div class="col-md-4">
</div>
</div>
</div>
</div>


</body>
</html>

