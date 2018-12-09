<div class="notice-board">

<div class="p_notice">
<div class="row">
	<?php
	include 'includes/conn.php';
	if (isset($_SESSION['inst_id'])) {
		$inst_id=$_SESSION['inst_id'];
	}
	else
	{
		$inst_id=0;
	}
	$sql="select * from notice where inst_id='$inst_id'||status=1 order by notice_id desc limit 2";
	$r=$conn->query($sql);
	while ($a=$r->fetch_assoc()) {
	$notice_id=$a['notice_id'];
	$notice_header=$a['notice_header'];
	$notice_content=$a['notice_content'];
	$ntime=$a['notice_time'];
	$link=$a['link'];
	if($link=='')
	{
		$link='notice.php?nid='.$notice_id;
	}
	?><a href="<?php echo $link; ?>">
	<div class="col-md-12 label label-primary"><?php echo $notice_header; ?></div>
	<div class="col-md-12 ncont"><?php echo $notice_content; ?>
		
	</div>
	<div class="label label-success ntime"><?php echo "publish:".$ntime; ?></div></a>
	<?php
	}

	?>
	</div>
</div>
<div class="m_notice">
	<marquee direction="up" height="100%" behavior="loop" delay="5" duration="5 " onmouseover="stop()" onmouseout="start()">
<div class="row">
	<?php
	include 'includes/conn.php';
	if (isset($_SESSION['inst_id'])) {
		$inst_id=$_SESSION['inst_id'];
	}
	else
	{
		$inst_id=0;
	}
	date_default_timezone_set('asia/kolkata');
	$d=date('d/m/y');
	$sql="select * from notice where (inst_id='$inst_id'||status=1)&&notice_date_to<='$d' order by notice_id desc";
	$r=$conn->query($sql);
	while ($a=$r->fetch_assoc()) {
	$notice_id=$a['notice_id'];
	$notice_header=$a['notice_header'];
	$notice_content=$a['notice_content'];
	$ntime=$a['notice_time'];
	$link=$a['link'];
	if($link=='')
	{
		$link='notice.php?nid='.$notice_id;
	}
	?><a href="<?php echo $link; ?>">
	<div class="col-md-12 label label-primary"><?php echo $notice_header; ?></div>
	<div class="col-md-12 ncont"><?php echo $notice_content; ?>
		
	</div>
	<div class="label label-success ntime"><?php echo "publish on:".$ntime; ?></div></a>
	<?php
	}

	?>
	</div>

	</marquee>
</div>

</div>