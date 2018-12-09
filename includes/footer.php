<div class="footer">
	<div class="row">
		<div class="col-md-3">
		<div class="first-p-ft">
			<ul>
			<fieldset>
				<legend style="color: white"><a href="index.php">HOME</a></legend>
				 <?php if (isset($_SESSION['act_type']))
           {
            if ($_SESSION['act_type']!='student') {
              echo " <li><a href='control_panel.php'><span class='glyphicon  glyphicon-cog'></span>Cpanel</a></li>";
            }
            else
            {
            	echo " <li><a href='user.php'><span class='glyphicon  glyphicon-cog'></span>profile</a></li>";
            }
           }
       ?>
   
             	<li><a href="form.php">F&amp;Q</a></li>
      			<li><a href="about_us.php">About Us</a></li>
      			<li><a href="contact.php">Contact_Us</a></li>
      			<li><a href="gallery.php">gallery</a></li>
                </fieldset>
			</ul>
			
</div>

		</div>
		<div class="col-md-3">
		<div class="first-p-ft">
			<ul>
			<fieldset>
				<legend style="color: white"><a href="downloads.php">downloads</a></legend>
                <li><a href=""></a></li>
             	<li><a href="downloads.php?d=gkgs">Gk&amp;Gs pdf </a></li>
      			<li><a href="downloads.php?d=prevq">previous year question paper</a></li>
      			<li><a href="downloads.php?d=mis">mislanious</a></li>

                </fieldset>
			</ul>

</div>
		</div>
		<div class="col-md-3">
			<div class="first-p-ft">
			<ul>
			<fieldset>
				<legend style="color: white"><a href="tutorials.php">tutorials</a></legend>
                <li><a href=""></a></li>
             	<li><a href="tutorials.php?q=bankpo">banking</a></li>
      			<li><a href="tutorials.php?q=railway">railway</a></li>
      			<li><a href="tutorials.php?q=ssc">ssc</a></li>
      			<li><a href="tutorials.php?q=cmb">Combine</a></li>

                </fieldset>
			</ul>

</div>
		</div>
		<div class="col-md-3">
			<div class="first-p-ft">
			<ul>
			<fieldset>
				<legend style="color: white"><a href="">Mislenious</a></legend>
                <li><a href=""></a></li>
             	<li><a href="#top">Go TO Top</a></li>
      			<li><a href="index.php?#test">Take a Test</a></li>
      			<li><a href="#user_place">Profile Option</a></li>
<?php  
  if(isset($_SESSION['user']))
  {
?>
 <li><a href="logout.php?ds=logout"> Logout</a></li>

<?php
  }
else
{
  ?>
      <li> <button class="btn login" style="margin-top: 2px;margin-left: 0px;padding: 0px;"> Login</button></li>
<?php } ?>
      			

                </fieldset>
			</ul>

</div>

		</div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8" style="text-align: center;">
         <input type="text"  name="submail" class="submail" placeholder="enter email for newsleter"><button class="subbtn">Subscribe</button>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row">
		
		<div class="col-md-12">
		<div class="copyright">ALL &copy;COPY RIGHTS ARE RESURVED UNDER EXAMFUNDA.COM 2016-17</div>
		</div>

	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">

		</div>
		<div class="col-md-4"></div>
	</div>
	<script type="text/javascript" src="js/arrocontol.js"></script>
</div>