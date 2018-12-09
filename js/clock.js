
$(document).ready(function(){
	function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
setInterval(function(){
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();

m=checkTime(m);
s=checkTime(s);
$('#timeshow').html(h+":"+m+":"+s);
},500);

});