<?php 

$cad= $_SERVER['SCRIPT_NAME'];
$cadd=explode('/', $cad);
$caddr=end($cadd);
$caddres=explode('.',$caddr);
$caddress=$caddres[0];
$c1="general";
$c2="general";
$c3="general";
$c4="general";
$c5="general";
$c6="general";
$c7="general";
$c8="general";

if($caddress=='index')
{
  $c1="active";
}
else if($caddress=='tutorials')
{
$c3='active';

}
else if($caddress=='downloads')
{
$c2='active';

}
else if($caddress=='form')
{
$c4='active';

}
else if($caddress=='about_us')
{
$c5='active';

}
else if($caddress=='contactus')
{
$c6='active';

}
else if($caddress=='gallery')
{
$c7='active';

}
else if($caddress=='control_panel')
{
$c8='active';

}
else
{
$c1="general";
$c2="general";
$c3="general";
$c4="general";
$c5="general";
$c6="general";
$c7="general";
$c8="general";

}
 ?>


<nav class="navbar navbar-inverse" id="top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Exam Funda</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="<?php echo $c1; ?>"><a href="index.php">Home</a></li>
      <li class="<?php echo $c2; ?>"><div class="dropdown">
  <button class="btn downloadsbtn dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="background: transparent;margin-top: 8px;color:#ecf0f1; opacity: 0.6;">DOWNLOADS
  <span class="caret"></span></button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
    <li role="presentation"><a role="menuitem" href="downloads.php?d=pdfgkgs">Gk&amp;gs</a></li>
    <li role="presentation"><a role="menuitem" href="downloads.php?d=prevq">Presvious Question Paper</a></li>
    <li role="presentation"><a role="menuitem" href="downloads.php?d=mis">mislenious</a></li>
    <li role="presentation" class="divider"></li>
    <li role="presentation"><a role="menuitem" href="DownLoads.php?d=result">results</a></li>
  </ul>
</div></li>
      <li class="<?php echo $c3; ?>"><a href="tutorials.php">Tutorial</a></li>
      <li class="<?php echo $c4; ?>"><a href="form.php">F&amp;Q</a></li>
      <li class="<?php echo $c5; ?>"><a href="about_us.php">About Us</a></li>
      <li class="<?php echo $c6; ?>"><a href="contactus.php">Contact Us</a></li>
      <li class="<?php echo $c7; ?>"><a href="gallery.php">gallery</a></li>
      <?php if (isset($_SESSION['act_type']))
           {
            if ($_SESSION['act_type']!='student') {
              echo " <li class=".$c8."><a href='control_panel.php'><span class='glyphicon  glyphicon-cog'></span>Cpanel</a></li>";
            }
           }
       ?>
        
       </ul>

    <ul class="nav navbar-nav navbar-right">
    <li><form class="navbar-form navbar-right" style="display: none;">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form></li>
<?php  
  if(isset($_SESSION['user']))
  {
?>
 <li><a href="logout.php?ds=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

<?php
  }
else
{
  ?>
      <li><button class="btn signup"  style="height: 100%;"><span class="glyphicon glyphicon-user"></span> Sign Up</button></li>
      <li> <button class="btn login"  style="height: 100%;"><span class="glyphicon glyphicon-log-in"></span> Login</button></li>
<?php } ?>
    </ul>
  </div>
</nav>
</div>
<div class="uparrow">
  <a href="#top"><img src="css/icon/uparrow.png" ></a>
</div>

<script type="text/javascript" src="js/home.js">
 </script>