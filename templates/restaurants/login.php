<?php require_once("../header.php"); ?>

<div class="ui container">
	<!-- Nav Bar  -->
	<div style="margin-top: 20px ">
		<?php require_once("../nav.php"); ?>
	</div>

	<div class="ui text container" style="margin-top: 13%">
		<div class="ui center aligned blue header">Login</div>
		<form class="ui form">
		  <div class="field">
		    <label>Username</label>
		    <input type="text" name="username" placeholder="Username">
		  </div>
		  <div class="field">
		    <label>Password</label>
		    <input type="password" name="password" placeholder="Password">
		  </div>
		  <button class="ui primary button" type="submit">Login</button>
		</form>
	</div>

</div>



<?php require_once("../footer.php"); ?>