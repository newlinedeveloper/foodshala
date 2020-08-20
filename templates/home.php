<?php require_once("header.php"); ?>


<div class="ui container">

	
	<!-- Nav Bar  -->
	<div style="margin-top: 20px ">
		<?php require_once("nav.php"); ?>
	</div>

	<!-- Home Page -->
	<div class="ui raised segment">

		<div class="ui four stackable cards">

			<div class="card">
			    <div class="image">
			      <img src="https://via.placeholder.com/100">
			    </div>
			    <div class="content">
			      <div class="header">Matt Giampietro</div>
			      <div class="meta">
			        <a>Friends</a>
			      </div>
			      <div class="description">
			        Matthew is an interior designer living in New York.
			      </div>
			    </div>
			    <div class="extra content">
			      <span class="right floated">
			        Joined in 2013
			      </span>
			      <span>
			        <i class="user icon"></i>
			        75 Friends
			      </span>
			    </div>
			</div>
		  <div class="card">
		    <div class="image">
		      <img src="https://via.placeholder.com/100">
		    </div>
		    <div class="content">
		      <div class="header">Molly</div>
		      <div class="meta">
		        <span class="date">Coworker</span>
		      </div>
		      <div class="description">
		        Molly is a personal assistant living in Paris.
		      </div>
		    </div>
		    <div class="extra content">
		      <span class="right floated">
		        Joined in 2011
		      </span>
		      <span>
		        <i class="user icon"></i>
		        35 Friends
		      </span>
		    </div>
		  </div>
		  <div class="card">
		    <div class="image">
		      <img src="https://via.placeholder.com/100">
		    </div>
		    <div class="content">
		      <div class="header">Elyse</div>
		      <div class="meta">
		        <a>Coworker</a>
		      </div>
		      <div class="description">
		        Elyse is a copywriter working in New York.
		      </div>
		    </div>
		    <div class="extra content">
		      <span class="right floated">
		        Joined in 2014
		      </span>
		      <span>
		        <i class="user icon"></i>
		        151 Friends
		      </span>
		    </div>
		  </div>
		  <div class="card">
		    <div class="image">
		      <img src="https://via.placeholder.com/100">
		    </div>
		    <div class="content">
		      <div class="header">Elyse</div>
		      <div class="meta">
		        <a>Coworker</a>
		      </div>
		      <div class="description">
		        Elyse is a copywriter working in New York.
		      </div>
		    </div>
		    <div class="extra content">
		      <span class="right floated">
		        Joined in 2014
		      </span>
		      <span>
		        <i class="user icon"></i>
		        151 Friends
		      </span>
		    </div>
		  </div>
		</div>
	</div>

</div>




<?php require_once("footer.php"); ?>

<script type="text/javascript">
	
	var form = "home-page";

	$.ajax({
			type: "post",
            url: "http://localhost/foodshala/restaurants/index.php",
            data: {
				form : form,
			},
		 		success : function(result){
		 			var obj = JSON.parse(result);
		 			var card = "";

		 			obj.forEach( res => {
		 				console.log(res);

		 				card += '<div class="card">';
		 				card += '<div class="image"><img src="https://via.placeholder.com/100"></div>';
		 				card += '<div class="content">';
		 				card += '<div class="header">'+res.res_name+'</div>';
		 				card += '<div class="meta">Owner :<h5>'+res.owner+'</h5></div>';
		 				card +='<div class="description">';
		 				card +='<h4>Address : </h4>'+res.address;
		 				card +='</div>';
		 				// card +='';
		 				// card +='';
		 				// card +='';
		 				card += '</div></div>';

		 	// 			<div class="card">
		  //   <div class="image">
		  //     <img src="https://via.placeholder.com/100">
		  //   </div>
		  //   <div class="content">
		  //     <div class="header">Elyse</div>
		  //     <div class="meta">
		  //       <a>Coworker</a>
		  //     </div>
		  //     <div class="description">
		  //       Elyse is a copywriter working in New York.
		  //     </div>
		  //   </div>
		  //   <div class="extra content">
		  //     <span class="right floated">
		  //       Joined in 2014
		  //     </span>
		  //     <span>
		  //       <i class="user icon"></i>
		  //       151 Friends
		  //     </span>
		  //   </div>
		  // </div>

		 				// console.log(res.owner);
		 			})
		 			$(".ui.four.stackable.cards").html(card);
		 			console.log(card);
		 		
		 	}
        });
</script>