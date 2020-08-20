<?php require_once("../header.php"); ?>

<div class="ui container">
	<!-- Nav Bar  -->
	<div style="margin-top: 20px ">
		<?php require_once("../nav.php"); ?>
	</div>

	<div class="ui text container" style="margin-top: 5%">
		<div class="ui center aligned blue header">Restaurant Register</div>

		<div class="ui success message" style="margin: 20px;">Restaurant Registered successfully</div>
		<form class="ui form" method="post">

		  <div class="required field">
		    <label>Restaurant Name</label>
		    <input type="text" name="res_name" id="res_name" placeholder="Restaurant's Name">
		  </div>

		  <div class="two fields">
		  	<div class="required field">
			    <label>Address</label>
			    <input type="text" name="address" id="address" placeholder="Address">
			</div>
			<div class="required field">
			    <label>City</label>
			    <input type="text" name="city" id="city" placeholder="City">
			</div>
			
		  </div>


		  <div class="three fields">
		  	<div class="required field">
			    <label>Zipcode</label>
			    <input type="text" name="zipcode" id="zipcode" placeholder="Zipcode">
			</div>
			<div class="required field">
			    <label>Country</label>
			    <input type="text" name="country" id="country" placeholder="Country">
			</div>
			<div class="required field">
			    <label>State</label>
			    <input type="text" name="state" id="state" placeholder="State">
			</div>
		  </div>

		  <div class="ui section divider"></div>

		  <div class="three fields">
		  	<div class="required field">
			    <label>Owner</label>
			    <input type="text" name="owner" id="owner" placeholder="Owner's Name">
			</div>
			<div class="required field">
			    <label>Email Id</label>
			    <input type="text" name="email" id="email" placeholder="Email Id">
			</div>
			<div class="required field">
			    <label>Phone No</label>
			    <input type="text" name="phone" id="phone" placeholder="Phone">
			</div>

		  </div>

		  <div class="two fields">
		  	<div class="required field">
			    <label>Password</label>
			    <input type="text" name="password" id="password" placeholder="Password">
			</div>
			<div class="required field">
			    <label>Conform Password</label>
			    <input type="text" name="con_password" id="con_password" placeholder="Conform Password">
			</div>
		  </div>

		  
		  <div class="required field">
		    <div class="ui checkbox">
		      <input type="checkbox" tabindex="0" class="hidden">
		      <label>I agree to the Terms and Conditions</label>
		    </div>
		  </div>
		  <button class="ui primary button" id="reg_register" type="submit">Submit</button>

		  <div class="ui error message"></div>
		</form>
	</div>

</div>



<?php require_once("../footer.php"); ?>