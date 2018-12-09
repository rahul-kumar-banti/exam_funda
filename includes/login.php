
<div class="login-popup">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-4">
	<div class="login-area">
<span class="close_login" id="lgc">&times; </span>
<div class="login_set">
<fieldset>
<legend style="color: white;text-align: center;">login</legend>
 <form class="login_form" action="" method="post" onsubmit="return false;">
    <div class="form-group">
    <label for="email" >login as:</label>
      <select class="select_option act_type" id="logas" style="color: black;" >
        <option value="user">user</option>
        <option value="institute">institute</option>
      </select><br>
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" style="width: 70%;box-shadow: 5px 7px 2px gray;
" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" checked=checked value="ckeck box" id="check"> Remember me</label>
      <input type="hidden" name="loginfrom" class="loginfrom" id="loginfrom" value="index.php">
    </div>
    <button type="submit" class="btn btn-success submit">Submit</button><a href="forget.php" class="btn btn-danger">
  forget</a>
   <button class="btn  btn-primary signup" style="margin-top: 0px;"><span class="glyphicon glyphicon-user"></span> Sign Up</button>
   <a href="index.php" class="btn btn-primary submit" id="msw">home</a>
  </form>
  <span class="errmsg"></span>
  <script type="text/javascript" src="js/login.js"></script>
</div>
</div>
	</div></fieldset>

</div>
<div class="col-md-5"></div>

</div></div>