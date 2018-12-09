<div class="question_disp ">
<div class="after_result"></div>
<div id="chartContainer" class="chartshow" style="position:fixed;right:0px;z-index: 5; top:0px; heihgt:20%; width:30%;"></div>
<div class="res">
  <a href="index.php" class="btn btn-block btn-success">GO TO HOME</a><br>
</div>

<hr>
		<hr>
    <div class="result exam_status">
      <span class="atmpt"></span>
    </div>
<?php
$user_id=$_SESSION['user_id'];
$sql="select * from result where test_id='$test_id'&&user_id='$user_id' ";
$r=$conn->query($sql);
$ifresultfound=$r->num_rows;
if(/*$ifresultfound>0*/ 5<2)
{
  ?>
  <div class="question">
    <h2>you have already attempted</h2>
    <h3><a href="index.php?#test">try another test</a></h3>
  </div>
  <?php

}
else
{


$sql="select * from question where test_id='$test_id'";
$r=$conn->query($sql);
$button='button';
$rnm=$r->num_rows;
if ($rnm==0) {
  echo "<div class='question noquestion'>no question is avilable for this module</div>";
$button='hidden';
}
	$i=0;
while($a=$r->fetch_assoc())
{

	$qus=$a['question'];
	$opt1=$a['option1'];
	$opt2=$a['option2'];
	$opt3=$a['option3'];
	$opt4=$a['option4'];
	$hints=$a['hints'];
	 $answer[$i]=$a['answer'];
	$i++;
	?>
<div class="question_area">
	<div class="question" >
  <div class="time-float-right">
<div class="time">
      <span class="mints"></span>:<span class="seconds"></span></div>
      </div>

	<div class="qdisp" data-bind='<?php echo $answer;?>'><?php echo $i.')'.$qus; ?></div>
		<div class="optdisp radio "><label class="radio-inline"><input type="radio" name="<?php echo 'opt'.$i; ?>" id="<?php echo 'opt'.$i; ?>" class="input" value='1'>(a) <?php echo $opt1; ?></label><br><label class="radio-inline">
		<input type="radio" name="<?php echo 'opt'.$i; ?>" id="<?php echo 'opt'.$i; ?>" class="input" value='2'>(b) <?php echo $opt2; ?></label><br></b><label class="radio-inline">
		<input type="radio" name="<?php echo 'opt'.$i; ?>" id="<?php echo 'opt'.$i; ?>" value='3' class="input">(c) <?php echo $opt3; ?></label><br><label class="radio-inline">
		<input type="radio" name="<?php echo 'opt'.$i; ?>" id="<?php echo 'opt'.$i; ?>" value='4' class="input">(d) <?php echo $opt4; ?></div></label>
		<div class="hint"><?php 
           if($hints!='')
           {
           	echo "* hints: ".$hints;
           }

		 ?>
</div>

	</div>

	<?php
}
}

if(empty($answer))
{
  $answer[1]=0;
  $rnm=0;
  $button='hidden';
}

$conn->close();
?>
</div>
<div class="subtn"><input type='<?php echo $button; ?>' class="btn btn-primary btn-block anssubmit" id="anssubmit" value="submit"></div><div class="to">
  <input type="hidden" name="ansstatuts" id="ansstatuts" value="1">
</div>
</div>
<script type="text/javascript">
////////////////////////

function pichart (rightq, wrongq, unatamptq) {
  var chart = new CanvasJS.Chart("chartContainer",
  {
    theme: "theme2",
    title:{
      text: "result"
    },
    data: [
    {
      type: "pie",
      showInLegend: true,
      toolTipContent: "#percent %",
      yValueFormatString: "#0.#,,. percent",
      legendText: "{indexLabel}",
      dataPoints: [
        {  y: rightq, indexLabel: "right answer" },
        {  y: wrongq, indexLabel: "Wrong answer" },
        {  y: unatamptq, indexLabel: "Un-attemped" }
        
      ]
    }
    ]
  });
  chart.render();
}


///////////////////////////////
function resulthide()
{
  var e=0;
  var tim=5000;
  var s=$(".question").length;
  t=s/2*tim+5000;
  $(".question").eq(0).show();
  setInterval(function(){
   $(".question").eq(e).slideToggle(tim);
   e++;
   $(".question").eq(e).slideToggle(tim);
   
  
  },tim);
  setTimeout(function(){

window.open("index.php","_self");
  },t);

}

/////////////////////////////////////
function result()
{
if($("#ansstatuts").val()==1){
	var msg;
   var atmpt=new Array();
   var answ;
   var inic;
   var s;
  var nm;
  var ans;
  var rightans=0,unattemptedq=0;
  var wrongq=0;
    var k=<?php echo json_encode($answer);?>;
    for (var i = 0;i<$(".question").length; i++) 
    {
      
    	 inc=i+1;
     	 s="opt"+inc;
     	 nm="input[name="+s+"]:checked";
       ans=$(nm).val();
      
       atmpt[i]=ans;
       if(k[i]==1)
       {
        answ='A';
       }
       else if(k[i]==2)
       {
        answ='b';
       }
       else if(k[i]==3)
       {
       answ='c';
       }
       else
       {
        ans='d';
       }
     
       if(k[i]==ans)
       {

       	 msg="right answer";
         cls="write";
         rightans++;
         
       }
       else
       {
        if(ans==0)
         {
          unattemptedq++;
         }

       	msg="wrong answer";
       	cls="wrong";
        wrongq++;
        $(".question").eq(i).append("<span class='answ'>answer: "+answ+"</span><br>"); 
       }
       
 $(".question").eq(i).append("<span class="+cls+">"+msg+"</span>"); 
    	
       }
     }
var obt=rightans*<?php echo $marks_for_each; ?>;
var totlm='<?php echo $fm; ?>';
var nmq='<?php echo $rnm; ?>';
var subnm='<?php echo $subject_name; ?>';
var coursenm='<?php echo $course_name;?>';
var tstid='<?php echo $test_id; ?>';
var tatmpt=$(".input:checked").length;
var unattemped=$(".question").length-tatmpt;
var mfeq='<?php echo $marks_for_each; ?>';
var tmax=mfeq*nmq;
var percent=obt/tmax*100;

     $.ajax({
        url:"resultsupdate.php",
                type:'post',
                data:{
                  test_id:tstid,
                  course_name:coursenm,
                  sub_name:subnm,
                  no_of_question:nmq,
                  total_attempt:tatmpt,
                  correct_option:rightans,
                  total_marks:tmax,
                  obtain_marks:obt,
                  percent:percent
                               },
                               success:function(result)
                  {
                    if(result!='fail')
                  
                                        {
                                           var performance;
                                          if (percent>90) {
                                            performance='excelent';
                                          }
                                          else if (percent>80) {
                                            performance='very good';
                                          }
                                          else if (percent>65) {
                                            performance='good';
                                          }

                                          else if (percent>45) {
                                            performance='average';
                                          }
                                         else if (percent>30) {
                                            performance='poor';
                                          }
                                          else {
                                            performance='fail';
                                          }
                                        
                                         $(".res").append("<span class='label label-success'>right answer:"+rightans+"</span> <br><span class='label label-warning'>attempted:"+tatmpt+" </span><br><span class='label label-danger'>wrong answer:"+wrongq+"</span><br><span class='label label-info'>percent:"+percent+"%</span><br><span class='label label-info'>performance:"+performance+"</span>");
                                         
                                  
                                         pichart(rightans,wrongq,unattemped);
                                         var  resu=$(".question_area").html();
                                         $(".after_result").html(resu);
                                          $(".after_result").show();
                                         $(".subtn").hide();
                                         $("input[type=radio]").hide();
                                         $(".question").hide();
                                         resulthide();

                                         }
                  else
                                      {
                                         $(".res").html("unable to update result try sfter some time");

                                       }
                  }
                  
               



     },86000 );
   /* */
}
///////////////////////////
$(".anssubmit").click(function () {
result();
$(this).fadeTo("slow",0.4);
$(this).addClass("disabled").removeClass("anssubmit");
$(this).attr("disabled","disabled");
$("#ansstatuts").val("0");

   }); 
   ///////////////////////
   $(".start_test").click(function(){


       var mins ="<?php echo $duration; ?>" // write mins to javascript  
       //var mins=1;
            var secs = 1; // write secs to javascript  
            
            setInterval(function(){ 
            
                // tic tac  
                if (--secs === -1)
                {
                    secs = 59;
                    --mins;
                }

                // leading zero? formatting  
                if (secs < 10)
                    secs = "0" + secs;
                if (mins < 10)
                    mins = "0" + parseInt(mins, 10);
                     if (secs == 0 && mins == 0) // time over  
                {

                  result();
                  $(".anssubmit").fadeTo("slow",0.4);
$(".anssubmit").addClass("disabled").removeClass("anssubmit");
$("#anssubmit").attr("disabled","disabled");
               }
               
                  $(".mints").css({ color:'white'});
                  if($("#ansstatuts").val()==1){
                if(mins>=0&&secs>=0){
                $(".mints").text(mins);
                $(".seconds").text(secs);
              }
            }
               else
              {
                // $(".mints").toggle();
                 // $(".seconds").slideToggle();
              }

                },1000);

            $(".start_test").hide();
            $(".question_disp").slideDown(1000);
}); 

$(".question").mouseover(function(e){
$(this).children(".time-float-right").show();
//$(".question:childern").show();
});
$(".question").mouseout(function(){
$(".time-float-right").hide();
  });
$(".input").change(function(){
 var attampt=$(".input:checked").length;
 var totalq=$(".question").length;
var unattempt=totalq-attampt;
 var ht="<span class='qstatus label label-primary '>attempted:"+attampt+"  unattempt:"+unattempt+"</span>";
 $(".atmpt").html(ht);

});
 
   	</script>
    <script src="js/canvasjs.min.js"></script>
</div>