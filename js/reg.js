$(document).ready(function () {

  $("#closeerror").click(function () {
console.log('w');
    $(".errormsg").slideUp();
  });


    $('.email').focusout(function(){
       
       var sEmail=$('.email').val();
       var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
if (!(filter.test(sEmail))){
  
  $("#erm").css("color", "red");
  $("#erm").text("incorrect email\n"+sEmail);
$(".errormsg").show();

}
else
{
  $.ajax({
          
          url:"emailvarification.php",
          type:'post',
          data:{email:sEmail},
          success:function(result){

  var re=result;
  if (result!='success') {
    
  $("#erm").html(result);
     $(".errormsg").show();
      }      

          }

  });

}
        
        
    });
  $(".signup").click(function () {
    $(".reg_popup").slideDown(2000);
  });
  $(".close_reg_form").click(function () {
    $(".reg_popup").slideUp(2000);
  });

  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#disp_img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
};

$("#img").change(function(){
    readURL(this);
});

$(".pass").focusin(function()
  { 
$("#pswd_info").show();

   });
$(".pass").focusout(function () {
  $("#pswd_info").hide();
});
$(".pass").keyup(function(){


});
$('.cpass').focusout(function() {
    var fpass=$(".pass").val();
    var cpass=$(".cpass").val();
    if(fpass!=cpass)
    {
      $("#erm").css("color", "red");
  $("#erm").text("password do not match\n");
     $(".errormsg").show();

    }
    });


$('input[type=password]').keyup(function() {
    var pswd = $(this).val();
if ( pswd.length < 8 ) {
    $('#length').removeClass('valid').addClass('invalid');
} else {
    $('#length').removeClass('invalid').addClass('valid');
}
if ( pswd.match(/[A-z]/) ) {
    $('#letter').removeClass('invalid').addClass('valid');
} else {
    $('#letter').removeClass('valid').addClass('invalid');
}

//validate capital letter
if ( pswd.match(/[A-Z]/) ) {
    $('#capital').removeClass('invalid').addClass('valid');
} else {
    $('#capital').removeClass('valid').addClass('invalid');
}

//validate number
if ( pswd.match(/\d/) ) {
    $('#number').removeClass('invalid').addClass('valid');
} else {
    $('#number').removeClass('valid').addClass('invalid');
}

});


});