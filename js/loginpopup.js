$(document).ready(function () {
	$(".login-popup").fadeIn();
	$("#lgc").hide();

	var url = window.location.href;
	$("#loginfrom").val(url);

});