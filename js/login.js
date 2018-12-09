$(document).ready(function () {
	$(".submit").click(function () {

 var email=$("#email").val();
 var pass=$("#pwd").val();
 var act_type=$('#logas').val();	
 var check=$("#check").prop("checked");
 var uri=$("#loginfrom").val();

 if(email=='')
 {
 	alert("enter email");
 }
 else if(pass=='')
 {
 	alert("enter password");
 }
 else
 {
 if(act_type=='')
 {
 	act_type='user';
 }
$.ajax({

url:'logincheck.php',
type:'post',
data:{email:email,pass:pass,remember:check,logas:act_type},
success:function(request) {
	var r=request;
	if(request=='')
	{
		window.open(uri,"_self");

	}
	else{
	$(".errmsg").text(request);
}
}



});

 }




	});


	});