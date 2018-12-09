<?php
include 'includes/conn.php';
if(isset($_POST['email']))
{
$email=$_POST['email'];
$sql="select email from user where email='$email'";
$a=$conn->query($sql);
if($a->num_rows>0)
{
?>
<h4 style="color:red">this email already registerd . please registerd with anotder one or <a href="forget.php">reset password</a>
<input type="hidden" name="estatus" id="estatus" value="off">
 </h4>
<?php
}
else
{

echo "success";
}
}


?>