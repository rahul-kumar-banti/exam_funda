<div class="user_place" id="user_place"> 
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<?php if(isset($_SESSION['user_id']))
{
	
	$uimg=$_SESSION['img'];
	
?>

<div class="user_info_disp">
<div class="user_img_disp">
<img class="img-thumbnail userimg" src="<?php echo $uimg ?>"></div></div>
<?php
if (isset($_SESSION['inst_tagline'])) {
	echo "<div class='label label-success'>",$_SESSION['inst_tagline']."</div>";
	}
 ?>
<a class="btn btn-block btn-primary" href="user.php?qry=profile"><span class="glyphicon  glyphicon-user"></span> <?php echo $_SESSION['user']; ?></a>
<a class="btn btn-block btn-success" href="user.php?qry=profile"><span class="glyphicon  glyphicon-cog"></span> profile</a>
<a class="btn btn-block btn-info" href="user.php?qry=test"><span class="glyphicon  glyphicon-tasks"></span> result</a>
<a href="logout.php?ds=logout" class="btn btn-block btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
<?php
}
else
{
?>
<div class="onlogoutuser">
<button class="btn signup btn-block btn-info"><span class="glyphicon glyphicon-user"></span> Sign Up</button>
<button class="btn inst_reg btn-block btn-warning" id="inst_reg"><span class="glyphicon glyphicon-plus"></span>Register  for institute</button>
 <button class="btn login btn-block btn-success"><span class="glyphicon glyphicon-log-in"></span> Login</button>
 <a class="btn btn-block btn-primary" href="downloads.php"><span class="glyphicon glyphicon-download-alt"></span>  downloads</a>
<a class="btn btn-block btn-danger" href="contactus.php"><span class="glyphicon glyphicon-envelope"></span> contect us</a>
<a class="btn btn-block btn-info" href="aboutus.php"><span class="glyphicon glyphicon-th-list"></span> about us</a>
</div>
<?php

}
?>
</div>
<div class="col-md-2"></div>
</div>
</div>
<script type="text/javascript">
	$("#inst_reg").click(function () {
		$(".inst_reg_popup").animate({ 
          width:'100%'
		},3000);
	});
</script>
	