<?php
include 'includes/conn.php';
session_start();
if(isset($_POST['email']))
{
	$act_t=$_POST['logas'];
	//$act_type='user';
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$ipass=$pass;
	$pass=md5($pass);
	$pass=sha1($pass);
	$pass=crypt($pass,"funda");
	$remember=$_POST['remember'];

	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

                              } 
	if($act_t=='user')
				{
					$query="select * from user where email='$email'&&password='$pass'&&status=1";
					$r=$conn->query($query);
					
					if($r->num_rows>0)
					{
						
						while ($a=$r->fetch_assoc()) {
					
					$_SESSION['user_id']=$a['user_id'];
					$_SESSION['inst_id']=$a['inst_id'];
					$_SESSION['act_type']=$a['act_type'];
					$_SESSION['email']=$a['email'];
					$_SESSION['user']=$a['disp_name'];
					$_SESSION['pass']=$a['password'];
					$_SESSION['img']=$a['img'];
						}
						$id=$_SESSION['user_id'];
					date_default_timezone_set('asia/kolkata');
				    $d=date('d/m/y h:i:sa');
					$sql =" UPDATE student_acitve SET status = 1,login_time='$d' WHERE student_acitve.user_id = '$id'";
						if($conn->query($sql))
						{
							if($remember=='true')
					{
					   setcookie("user_id",$_SESSION['user_id'],time() + (86400 * 30), "/");
					   setcookie("pass",$_SESSION['pass'],time() + (86400 * 30), "/");
					   setcookie("inst_id",$_SESSION['inst_id'],time() + (86400 * 30), "/");
					   setcookie("user",$_SESSION['user'],time() + (86400 * 30), "/");
					   setcookie("act_type",$_SESSION['act_type'],time() + (86400 * 30), "/");
					   setcookie("email",$_SESSION['email'],time() + (86400 * 30), "/");
					   setcookie("img",$_SESSION['img'],time() + (86400 * 30), "/");


					}
						}
					}
					else
					{
						echo "no match found";
					}
					
				}
				else
				{

                        $query="select * from istitute where email='$email'&&password='$ipass'&&status=1";
				
					$r=$conn->query($query);
					
					if($r->num_rows>0)
					{
						
						while ($a=$r->fetch_assoc()) {
					
					$_SESSION['user_id']=$a['inst_id'];
					$_SESSION['inst_id']=$a['inst_id'];
					$_SESSION['act_type']='institute';
					$_SESSION['email']=$a['email'];
					$_SESSION['user']=$a['inst_name'];
					$_SESSION['pass']=$a['password'];
					$_SESSION['img']=$a['inst_img'];
					$_SESSION['inst_tagline']=$a['inst_tagline'];
						}
						$id=$_SESSION['user_id'];
					date_default_timezone_set('asia/kolkata');
				    $d=date('d/m/y h:i:sa');
					$sql =" UPDATE student_acitve SET status = 1,login_time='$d' WHERE student_acitve.user_id = '$id'";
						if($conn->query($sql))
						{
							if($remember=='true')
					{
					   setcookie("user_id",$_SESSION['user_id'],time() + (86400 * 30), "/");
					   setcookie("pass",$_SESSION['pass'],time() + (86400 * 30), "/");
					   setcookie("inst_id",$_SESSION['inst_id'],time() + (86400 * 30), "/");
					   setcookie("user",$_SESSION['user'],time() + (86400 * 30), "/");
					   setcookie("act_type",$_SESSION['act_type'],time() + (86400 * 30), "/");
					   setcookie("email",$_SESSION['email'],time() + (86400 * 30), "/");
					   setcookie("img",$_SESSION['img'],time() + (86400 * 30), "/");
					      setcookie("inst_tagline",$_SESSION['inst_tagline'],time() + (86400 * 30), "/");


					}
						}
					}
					else
					{
						echo "password or email not found";
					}
					
				

				}
}

$conn->close();
?>