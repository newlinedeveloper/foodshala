<?php require_once("../header.php"); ?>

<div class="ui container">

	<!-- Nav Bar  -->
	<div style="margin-top: 20px ">
		<?php require_once("../nav.php"); ?>
	</div>

	<!-- Owner Dashboard -->
	<div class="ui grid" style="margin-top: 20px">

	  <div class="four column row">

	    <div class="left floated column">
	    	<div class="ui green button" id="add_menu">Add Menu</div>
	    </div>
	  </div>

	</div>

	<div class="ui raised blue segement" style="margin-top: 20px">

		<table class="ui blue striped table">
			<thead>
					<tr>
					<th>Menu id</th>
					<th>Menu Name</th>
					<th>Category</th>
					<th>Rate</th>
					<th>Price</th>
					<th>Edit </th>
					<th>Delete</th>
					</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
	





</div>

	<div class="ui modal">

		<i class="close icon"></i>
		<div class="ui center aligned header">
			Add Menu
		</div>

		<div class="content">

			<div class="ui text container">
				
				<form class="ui form raised segment" action="" method="post" enctype="multipart/form-data">
					
					<img class="ui small circular image" src="https://via.placeholder.com/50" style="margin: 0 auto; float: none; margin-bottom: 20px;">

					<div class="two fields">
						<div class="field">
						    <label>Menu's Name</label>
						    <input type="text" name="menu_name" id="menu_name" placeholder="Menu's Name">
						</div>

						<div class="field">
					
							<label for="stock">Category</label>
							<div class="ui selection dropdown">
								<input type="hidden" name="qty">
								<i class="dropdown icon"></i>
								<div class="default text">Select Category</div>
								<div class="menu">
									<div class="item" data-value="Veg">Veg</div>
									<div class="item" data-value="Non-Veg">Non-Veg</div>
								</div>
							</div>
						</div>
					</div>

					<div class="two fields">
						<div class="field">
						    <label>Rate</label>
						    <input type="text" name="rate" placeholder="Menu's Rate">
						</div>

						<div class="field">
						    <label>Price</label>
						    <input type="text" name="price" placeholder="Menu's Price">
						</div>
					</div>

					<div class="field">
					    <label>Description</label>
					    <textarea></textarea>
					</div>
					

				</form>
		
		
		

			</div>	

			

		</div>
		<div class="actions">
			<button name="submit" id="submit" class="ui green inverted button">submit</button> 
			<button name="display" id="display" class="ui red inverted button" value="display">Cancel</button>
		</div>

	</div>

	


<?php require_once("../footer.php"); ?>

<script type="text/javascript">

	$(document).ready(function(){

		$('#example').DataTable();

		$("#add_menu").click(function(){
			$(".ui.modal").modal("show");
			$(".ui.selection.dropdown").dropdown();	
		});

		var form = "res-dashboard";
		$.ajax({
			type: "post",
            url: "http://localhost/foodshala/restaurants/index.php",
            data: {
				form : form,
			},
	 		success : function(result){
	 			var obj = JSON.parse(result);
	 			// console.log(obj);
	 			var table = "";
	 			obj.forEach( res => {
		 			console.log(res);
		 			table +='<tr>';
		 			table +='<td>'+res.menu_id+'</td>';
		 			table +='<td>'+res.menu_name+'</td>';
		 			table +='<td>'+res.category+'</td>';
		 			table +='<td>'+res.rate+'</td>';
		 			table +='<td>'+res.price+'</td>';
		 			table +='<td><button class="circular ui blue inverted icon button"><i class="edit outline icon"></i></button></td>';
		 			table +='<td><button class="circular ui red inverted icon button"><i class="trash alternate outline icon"></i></button></td>';
		 			table +='</tr>';

	 			});

	 			$('tbody').html(table);
	 		}

	 	});
	});
</script>