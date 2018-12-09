<div class="inst_reg_popup">
	<div class="errormsgr">
	<div class="errormsg_showr">
	<div id="closeerrorr">&times;</div> 
     <div id="ermr"></div>
	</div>
</div>
<div class="row">
<div class="col-sm-3">
	<div class="user_img_selected"><img src="" id="disp_img"  class="img img-responsive img-thumnail"></div>

</div>
<div class="col-sm-7">

	<div class="inst_reg_sec form-group">
	<span class="close_inst_reg_form">&times;</span>
	<h2 id="reg_head">register here</h2>
	<div class="insttab">
	
<form action="" method="post" enctype="multipart/form-data" class="inst_reg" onsubmit="return false;">
		<table width="100%" class="insttab" >
        
        <tr>
        <td class="frm_lt">institute name<span id="must">*</span></td>
		<td><input type="text" class="form-control inst_name" id="inst_name" name="inst_name" required="required">
		</td>
		</tr>
         <tr>
		<td class="frm_lt">Email id<span id="must">*</span></td>
		<td> <input type="email" class="inst_email form-control" id="inst_email"  name="email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
		</td>
		</tr>

		<tr>
		<td class="frm_lt">mobile no<span id="must">*</span></td>
		<td><select id="inst_country_code" class="inst_country_code" name="inst_country_code">
			<option value="+91">+91</option>
			<option value="+1">+1</option>
		</select >
		<input type="number" class="inst_mobile" id="inst_mobile" name="mobile" min="10" class="mob" maxlength="11" required="required"></td></tr>
		<tr>
        <td class="frm_lt">Chair persion<span id="must">*</span></td>
		<td><input type="text" class="form-control inst_name" id="inst_cpersion" name="cpersion" required="required">
		</td>
		</tr>
		
        <tr>
        <td class="frm_lt">
		image</td><td><input type="file" class="img_file form-control"  id="inst_img" name="img"></td></tr>
		<script type="text/javascript">
			function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#disp_img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
};

$("#inst_img").change(function(){
    readURL(this);
});


		</script>
	
		
        <tr><td class="frm_lt">
		Address<span id="must">*</span></td><td><textarea class="form-control address" id="inst_address" cols="20" rows="4" placeholder="enter address" required="required"></textarea></td></tr>

		<tr>
        <td class="frm_lt">website<span id="must">*</span></td>
		<td><input type="text" class="form-control inst_website" id="inst_website" name="inst_website" placeholder="http://yourwebsite.com" required="required">
		</td>
		</tr>
		<tr>
        <td class="frm_lt">Tag Line</td>
		<td><input type="text" class="form-control inst_tagline" id="inst_tagline" name="inst_tagline" placeholder="enter uour tagline" required="required">
		</td>
		</tr>
        <tr><td class="frm_lt">
		Password<span id="must">*</span></td><td> <input type="password" id="inst_pass1" name="pass" class="pass form-control" autocomplete="off" required="required">
        <div id="pswd_info">
    <h4>Password must meet the following requirements:</h4>
    <ul>
    <li><span id="must">*</span> first Letter Must be Camital</li>
        <li id="letter" class="invalid">At least <strong>one letter</strong></li>
        <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
        <li id="number" class="invalid">At least <strong>one number</strong></li>
        <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
    </ul>
</div>
		</td></tr>

        <tr><td class="frm_lt">
		 conferm Password <span id="must">*</span></td><td> <input  type="password" name="cpass" id="inst_pass2" class="pass cpass form-control" required="required"></td></tr>
		 <tr><td align="right"><input type="checkbox"  id="tc" name="tc" checked="checked" required="required"></td><td align="left">agree with  <a href="">Tearms and policy</a></td></tr>
		 <tr><td class="frm_lt"></td>
		 <td><input type="submit" class="btn btn-block btn-primary" id="submit" value="create" name="submit"></td></tr>
		</table></form>
</div>
	</div>
	</div>
	<div class="col-sm-2"></div>
	<script type="text/javascript" src="js/instformreg.js"></script>
</div>
</div>
