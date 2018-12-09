<html>
	<head><title></title>
<script type="text/javascript" src="js/jquery.js">
	
</script>
<style type="text/css">
	
	.inputtextfirst
	{
		width:4 \ 00px;
		border:2px solid blue;

	}
</style>
</head>
<body>
	
<input type="noofcol" class="col" name="cl"><button class="colbtn">add</button>
<div class="intp"></div>
<script type="text/javascript">
	var d=document.getElementsByClassName('intp')[0];
	var b=document.getElementsByClassName('colbtn')[0];
	
	b.addEventListener("click",mfun);
	function mfun() {
	
	var incol=document.getElementsByClassName('col')[0].value;
	for (var i = 0; i<incol ; i++) {
		$(".intp").append("<input type='text' class='inputtextfirst'name='inputtext[]'></input><input type='text' class='inputtext'name='inputtext[]'></input><input type='text' class='inputtext'name='inputtext[]'></input><input type='text' class='inputtext'name='inputtext[]'></input><input type='text' class='inputtext'name='inputtext[]'></input><br>");
      }
  }
		</script>
		<div id="demo"></div>
<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.toString();
</script>
</body>

</html>