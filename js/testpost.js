$(document).ready(function () {
	$(".create_test").click(function(){
		var courseid=$(".course").val();
		var subjectid=$(".subject").val();
		var instid=$("input[name=instid]").val();
		var tname=$(".test_name").val();
		var noq=$(".no_of_question").val();
		var duration=$(".duration").val();
		var mfeq=$(".mfeq").val();
		var tflag=$(".tflag:checked").val();
		var tstatus=$(".tstatus:checked").val();
		var po=0;
		
		if(tname.length<5)
		{
		
		 $(".tnameerror").hide();
			$(".errormessage").append("<span class='label label-danger tnameerror'>please fill test name *test name shoud must be greater then 4 character<br></span>");
			$(".tnameerror:last").show();
			po++;
		}
		else
		{
			$(".tnameerror").hide();
		}
		if(duration.length<1)
		{
		
		 $(".durationerror").hide();
			$(".errormessage").append("<span class='label label-danger durationerror'>please fill duration field<br></span>");
			$(".durationerror:last").show();
			po++;
		}
		else
		{
			$(".durationerror").hide();
		}
		if(mfeq.length<1)
		{
		
		 $(".mfeqerror").hide();
			$(".errormessage").append("<span class='label label-danger mfeqerror'>please fill marks for each question field<br></span>");
			$(".mfeqerror:last").show();
			po++;
		}
		else
		{
			$(".mfeqerror").hide();
		}
		if(noq==0)
		{
		
		 $(".noqerror").hide();
			$(".errormessage").append("<span class='label label-danger noqerror'>please fill no question field<br></span>");
			$(".noqerror:last").show();
			po++;
		}
		else
		{
			$(".noqerror").hide();
		}
		if(tflag==null)
		{
		
		 $(".tflagerror").hide();
			$(".errormessage").append("<span class='label label-danger tflagerror'>please select one of active or deactive<br></span>");
			$(".tflagerror:last").show();
			po++;
		}
		else
		{
			$(".tflagerror").hide();
		}
		if(tstatus==null)
		{

			$(".tstatuserror").hide();
			$(".errormessage").append("<span class='label label-danger tstatuserror'>please select one of public or private<br></span>");
			po++;
			$(".tstatuserror:last").show();
		
		}
		else
		{
			$(".tstatuserror").hide();
		}

		
		console.log(tflag+""+tstatus);
		if(po==0){
			$.ajax({
              url:'includes/testcreate.php',
              type:'post',
              data:{courseid:courseid,subjectid:subjectid,instid:instid,tname:tname,noq:noq,duration:duration,mfeq:mfeq,tflag:tflag,tstatus:tstatus},
              success:function(result)
              {
              addfield(noq,result);	
              $(".after_q_submit").fadeIn();
	$(".after_q_submit_result").animate({

 height:'400px',
 width:'400px'
	},3000);
	var tcheader="<h2 class='tcheader'>"+tname+"</h2>";
	var tcmsg="<p class='tcmsg'>test is created successfully now post question carefully given bellow </p>";
	var btnn="<br><button class='btn  btn-primary close_after_q_submit_btn'>close</button>";
	$(".after_q_submit_result").append(tcheader+tcmsg+btnn);

	$(".close_after_q_submit_btn").click(function(){
$(".after_q_submit").fadeOut();

	});
              }
			});
			
       $(".create_test").attr("disabled","disabled");
       $(".create_test").fadeTo('0.5');

   }

	});
	function addfield(nof,testidtopost) {
		var nofield=nof;
		var qno;
		$(".test_id_to_post").val(testidtopost);
		for (var i = 0; i<nofield; i++) {
          qno=i+1;
          qno="<label class='label label-success'> Ques("+qno+")</label>";
		$(".question_post_area").append(qno+"<div class='question_post'><input type='text' class='questiontxt input ' name='questiontxt' placeholder='enter Question'><br><input type='text' class='opt1txt input ' name='opt1txt' placeholder='option one'><input type='text' class='opt2txt input 'name='opt2txt' placeholder='option second'><input type='text' class='opt3txt input'name='opt3txt' placeholder='option third'><input type='text' class='opt4txt input 'name='opt4txt' placeholder='option four'><input type='text' class='hints input'name='hints' placeholder='hints'><select  class='answertxt input' name='answertxt' placeholder='answer' ><option value='0'>Answer</option><option value='1'>A</option><option value='2'>B</option><option value='3'>C</option><option value='4'>D</option></select></div><br>");
      }
      $(".qsubmit").slideToggle();
	}


	$(".qsub").click(function(){
        
	var qposted=0;
		var question;
		var courseid=$(".course").val();
		var subjectid=$(".subject").val();
		var noq=$(".no_of_question").val();
		var opt1;
		var tid=$(".test_id_to_post").val();
		var opt2,opt3,opt4,hints,answer;
		var blanckfield=0;
            
            for (var i = 0; i < noq; i++) {
			question=$(".questiontxt").eq(i).val();
			if(question=='')
			{
blanckfield++;
			}
		}
	
		if(blanckfield==0){
			$(".qsub").attr("disabled","disabled");
		for (var i = 0; i < noq; i++) {
			question=$(".questiontxt").eq(i).val();
			opt1=$(".opt1txt").eq(i).val();
			opt2=$(".opt2txt").eq(i).val();
			opt3=$(".opt3txt").eq(i).val();
			opt4=$(".opt4txt").eq(i).val();
			hints=$(".hints").eq(i).val();
			answer=$(".answertxt").eq(i).val();
			$.ajax({

              url:'includes/qpost.php',
              type:'post',
              data:{tid:tid,courseid:courseid,subjectid:subjectid,question:question,opt1:opt1,opt2:opt2,opt3:opt3,opt4:opt4,hints:hints,answer:answer},
              success:function(result)
              {
               qposted++;
               if(qposted==noq)
               {
	$(".qposterror").html("<label class='label label-warning'>question posted </label>");
                }
              }

			});

		}
	}
	else
	{
$(".qposterror").html("<label class='label label-warning'>please fill all the question field </label>");

		}


	});
	$(".close_after_q_submit").click(function(){
	
$(".after_q_submit").fadeOut();

	});

});