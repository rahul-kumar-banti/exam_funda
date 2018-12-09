<div class="cpanelarea">
<?php
$class1="general";
$class2="general";
$class3="general";
$class4="general";
$class5="general";
$addrplug="includes/latestcpen.php";
if(isset($_GET['qury'])){
if($_GET['qury']=='latest')
{
	$class1='active';
	$addrplug="includes/latestcpen.php";
}

else if($_GET['qury']=='profile')
{
	$class2='active';
	$addrplug="includes/profile.php";
}

else if($_GET['qury']=='notice')
{
	$class3='active';
	$addrplug="includes/editnotice.php";
}

else if($_GET['qury']=='question')
{
	$class4='active';
	$addrplug="includes/editquestion.php";
}

else if($_GET['qury']=='student')
{
	$class5='active';
	$addrplug="includes/managestudent.php";
}
else
{
	$class5='general';
}
}
?>
<ul class="nav nav-tabs">
  <li class="<?php echo $class1;?>"><a href="?qury=latest">Home</a></li>
  <li class="<?php echo $class2;?>"><a href="?qury=profile">Edit profile</a></li>
  <li class="<?php echo $class3;?>"><a href="?qury=notice">notice</a></li>
  <li class="<?php echo $class4;?>"><a href="?qury=question">edit test</a></li>
  <li class="<?php echo $class5;?>"><a href="?qury=student">monitor student</a></li>

</ul>
<div class="latest">
<?php include_once($addrplug); ?>

</div>
</div>