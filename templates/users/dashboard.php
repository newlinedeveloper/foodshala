<?php require_once("../header.php"); ?>

<div class="ui container">
	<!-- Nav Bar  -->
	<div style="margin-top: 20px ">
		<?php require_once("../nav.php"); ?>
	</div>

	<div class="ui text container" style="margin-top: 15%">
		<form class="ui form">
		  <div class="field">
		    <label>First Name</label>
		    <input type="text" name="first-name" placeholder="First Name">
		  </div>
		  <div class="field">
		    <label>Last Name</label>
		    <input type="text" name="last-name" placeholder="Last Name">
		  </div>
		  <div class="field">
		    <div class="ui checkbox">
		      <input type="checkbox" tabindex="0" class="hidden">
		      <label>I agree to the Terms and Conditions</label>
		    </div>
		  </div>
		  <button class="ui button" type="submit">Submit</button>
		</form>
	</div>

</div>



<?php require_once("../footer.php"); ?>