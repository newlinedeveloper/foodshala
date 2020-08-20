<?php require_once("../header.php"); ?>

<div class="ui container">
	<!-- Nav Bar  -->
	<div style="margin-top: 20px ">
		<?php require_once("../nav.php"); ?>
	</div>

	<div class="ui text container" style="margin-top: 13%">
		<div class="ui center aligned blue header">Signup</div>
		<form class="ui form">
		  <div class="field">
		    <label>Username</label>
		    <input type="text" name="username" placeholder="Username">
		  </div>
		  <div class="two fields">
		  	<div class="field">
			    <label>Email Id</label>
			    <input type="text" name="email" placeholder="Email Address">
			  </div>
			  <div class="field">
			    <label>Phone</label>
			    <input type="text" name="phone" placeholder="Phone No">
			  </div>
		  </div>

		  <div class="two fields">
		  	<div class="field">
			    <label>Password</label>
			    <input type="password" name="password" placeholder="Password">
			  </div>
			  <div class="field">
			    <label>Conform Password</label>
			    <input type="password" name="con_password" placeholder="Conform Password">
			  </div>
		  </div>
		  
		  <div class="field">
		    <div class="ui checkbox">
		      <input type="checkbox" tabindex="0" class="hidden">
		      <label>I agree to the Terms and Conditions</label>
		    </div>
		  </div>
		  <button class="ui primary button" type="submit">Submit</button>
		</form>
	</div>

</div>



<?php require_once("../footer.php"); ?>