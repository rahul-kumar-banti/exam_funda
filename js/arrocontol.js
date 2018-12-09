$(window).scroll(function(){
var y=$(this).scrollTop();
if(y>400)
{
  $(".exam_status").removeClass("exam_status").addClass("exam_status_top");
  $(".uparrow").slideDown();
}
else
{
 $(".exam_status_top").removeClass("exam_status_top").addClass("exam_status"); 
 $(".uparrow").slideUp();
}
});
