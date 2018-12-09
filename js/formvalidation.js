$(document).ready( function(){
$(".form_reg").submit(function() {
  var i=0;
	var  fname=$("#fnm").val();
    var lname=$("#lnm").val();
    var gender=$("#gender").val();
     var day=$('#day').val();
    var month=$('#month').val();
    var year=$("#year").val();
    var institute=$("#institute").val();
    var file=$("#img").files;
    var country_code=$("#country_code").val();
     var mob=$("#mob").val();
     var sEmail=$('.email').val();
 var address=$(".address").val();
    var pass1=$("#pass1").val();
    var pass2=$("#pass2").val();
    var ff=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
    var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
      
    var msg='';  
      if(sEmail.length>0) {

 $.ajax({
          
          url:"emailvarification.php",
          type:'post',
          data:{email:sEmail},
          success:function(result){

  var re=result;
  if (result!='success') {
    
  $("#erm").html(result);
     $(".errormsg").show();
      i++;
      }      

          }

  });
	  
    }


if (!(filter.test(sEmail))){
	
	$("#erm").css("color", "red");
	$("#erm").text("incorrect email\n"+sEmail);
$(".errormsg").show();
i++;

}

        if(!(ff.test(pass1)))
    {
    	$("#erm").css("color", "red");
	$("#erm").text("plese select valid password according to instruction\n");
	   $(".errormsg").show();
	   i++;
      
    }

    if(pass1!=pass2) {
   
    	$("#erm").css("color", "red");
	$("#erm").text("password do not match\n");
	   $(".errormsg").show();
	   i++;
    } 
     if(mob.length<10) {
   
    	$("#erm").css("color", "red");
	$("#erm").text("plese enter valid mobile no\n");
	   $(".errormsg").show();
	   i++;
    } 
     if(month==0||day==0) {
   
    	$("#erm").css("color", "red");
	$("#erm").text("plese select valid date and month\n");
	   $(".errormsg").show();
	   i++;
    } 
   



    if(i==0)
    {
    function file_send() {

	var f= document.getElementById("img").files[0];
	 var formdata = new FormData();
    formdata.append("file1",f);
    var ajax = new XMLHttpRequest();
    ajax.open("post","upload.php");
    ajax.onreadystatechange =function(f)
    {

        if(ajax.readyState ==4 && ajax.status == 200)
            {
                  var msg= ajax.responseText;
                  dataupdate(msg);
                       
        
    }

    }
    ajax.send(formdata);
   
   }
   var m=file_send();
   function dataupdate(uploadedfile)	{
        
  
    var disp_name=fname+" "+lname;
    var dob=day+"/"+month+"/"+year;
    var country_code=$("#country_code").val();
    var mobile_no=country_code+mob;
    var address=$(".address").val();
    var file_name=uploadedfile;


    
       	$.ajax({

        url:'reg.php',
        type:'post',
        
        data:{dp:disp_name,dob:dob,gender:gender,institute:institute,file:file_name,mob:mobile_no,email:sEmail,address:address,pass:pass1},
         success:function(result) {
         	var addr="conferm.php?txt="+sEmail;
         	//$("#erm").css("color", "red");
	//$("#erm").text(result);
	   //$(".errormsg").show();
	   if(result!='problem'){
         var addr="conferm.php?txt="+result;
          window.open(addr,"_self","width=500,height=500");
}
else
{
	$("#erm").css("color", "red");
	$("#erm").text(result);
	   $(".errormsg").show();
}
         }

    	});


    	
    }
}

});




  });
 