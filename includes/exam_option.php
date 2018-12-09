	<div class="exam-option">
        
	<div class="row">
		<div class="course-option1 col-md-3"><button class="btn  bank_po course-btn" value="1"><span class="glyphicon   glyphicon-hand-right exam-ico"></span> bank po</button></div>
        <div class="course-option2 col-md-6"><button class="btn  bank_po course-btn" value="2"><span class="glyphicon   glyphicon-hand-right exam-ico"></span> bank celerk </button></div>
        <div class="course-option3 col-md-3"><button class="btn  bank_po course-btn" value="3"><span class="glyphicon   glyphicon-hand-right exam-ico"></span> ssc ldc

        </button></div>
</div>
<div class="row">
		<div class="course-option4 col-md-5"><button class="btn  bank_po course-btn" value="4"><span class="glyphicon   glyphicon-hand-right exam-ico"></span> ssc udc</button>
		</div>
        <div class="course-option5 col-md-2"><button class="btn  bank_po course-btn" value="5"> <span class="glyphicon   glyphicon-hand-right exam-ico"></span> ssc cgl</button></div>
        <div class="course-option6 col-md-5"><button class="btn  bank_po course-btn" value="6"><span class="glyphicon   glyphicon-hand-right exam-ico"></span> railway</button></div>
</div>
<div class="row">
		<div class="course-option7 col-md-3"><button class="btn  bank_po course-btn" value="7"><span class="glyphicon   glyphicon-hand-right exam-ico"></span> bssc</button></div>
        <div class="course-option8 col-md-6"><button class="btn  bank_po course-btn" value="8"><span class="glyphicon   glyphicon-hand-right exam-ico"></span> tet</button></div>
        <div class="course-option9 col-md-3"><button class="btn  bank_po course-btn" value="9"><span class="glyphicon   glyphicon-hand-right exam-ico"></span> cet</button></div>
</div>
<div class="row">
		<div class="course-option10 col-md-5"><button class="btn  bank_po course-btn" value="10"><span class="glyphicon   glyphicon-hand-right exam-ico"></span> mts</button></div>
        <div class="course-option11 col-md-2"><button class="btn  bank_po course-btn" value="11"><span class="glyphicon   glyphicon-hand-right exam-ico"></span> air force</button></div>
        <div class="course-option12 col-md-5"> <button class="btn  bank_po course-btn" value="12"><span class="glyphicon   glyphicon-hand-right exam-ico"></span> nda</button></div>
</div>
<script type="text/javascript">
   $(".course-btn").click(function(){
         var a=event.pageX;
         a=a-50;
         

   var b=event.pageY;
   b=b+20;
   $(".exam-sub-option").css({"top":b,"left":a});
   $(".close_option").css({"color":"red","font-size":"24px","cursor":"pointer"});
    $(".exam-sub-option").slideDown();

    var course_code=$(this).val();
    var add="test.php?course_code="+course_code+"&sub=";
    $(".btn1").attr("href",add+"1");
    $(".btn2").attr("href",add+"2");
    $(".btn3").attr("href",add+"3");
    $(".btn4").attr("href",add+"4");
    $(".btn5").attr("href",add+"5");


        }); 
        $(".close_option").click(function(){
        $(".exam-sub-option").slideUp();

        });    
</script>
</div>
	
