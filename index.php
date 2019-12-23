<?php 
include("db.php");
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <title>w3wchools index page</title>
	 <script type="text/javascript">
	 	function test(){
	 		document.getElementById("search").innerHTML="<input type='text'>";
	 	}
	 </script>
</head>
<body>
	<div class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1 class="pull-left">w3schools.com</h1>
					<h5 class="pull-right text">the world largest web developer site</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="header_bottom">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<ul class="list-inline">

						<li class="left">
							<div class="dropdown">
							    <h5 class=" dropdown-toggle" data-toggle="dropdown">TUTOPRIALS
							    <span class="caret"></span></h5>
							    <ul class="dropdown-menu ">
							    	<div class="float">
							      <li class="none"><a href=""><h3>HTML and CSS</h3></a></li>					    	
							      <li><a href="#">Learn HTML</a></li>
							      <li><a href="#">Learn CSS</a></li>
							      <li><a href="#">Learn W3.CSS</a></li>
							      <li><a href="">Learn Colors</a></li>
							      <li><a href="">Learn Bootstrap 3</a></li>
							      <li><a href="">Learn Bootstrap 4</a></li>
							      <li><a href="">Learn Icons</a></li>
							      <li><a href="">Learn Graphics</a></li>
							      <li><a href="">Learn How To</a></li>	
							    	</div>
							    	<div class="floattwo">
							      <li><a href="#">Llllllllearn HTML</a></li>
							      <li><a href="#">Lellllllarn CSS</a></li>
							      <li><a href="#">Llllllllearn W3.CSS</a></li>
							      <li><a href="">Learn Colors</a></li>
							      <li><a href="">Learn Bootstrap 3</a></li>
							      <li><a href="">Learn Bootstrap 4</a></li>
							      <li><a href="">Learn Icons</a></li>
							      <li><a href="">Learn Graphics</a></li>
							      <li><a href="">Learn How To</a></li>	
							       </div>		
							       <div class="floattwo">
							      <li><a href="#">Lllllllllearn HTML</a></li>
							      <li><a href="#">Lelllllllarn CSS</a></li>
							      <li><a href="#">Lllllllllearn W3.CSS</a></li>
							      <li><a href="">Learn Colors</a></li>
							      <li><a href="">Learn Bootstrap 3</a></li>
							      <li><a href="">Learn Bootstrap 4</a></li>
							      <li><a href="">Learn Icons</a></li>
							      <li><a href="">Learn Graphics</a></li>
							      <li><a href="">Learn How To</a></li>	
							       </div>		     
							    </ul>							  
							</div>
						</li>
					         
					    <li class="left">                                       
						   <div class="dropdown">
							    <h5 class=" dropdown-toggle"  data-toggle="dropdown">REFERANCE
							    <span class="caret"></span></h5>
							    <ul class="dropdown-menu">
							      <li><a href="#">HTML</a></li>
							      <li><a href="#">CSS</a></li>
							      <li><a href="#">JavaScript</a></li>
							    </ul>
						  </div>
					 	</li>

					 	<li class="left">
						    <div class="dropdown">
							    <h5 class="dropdown-toggle"  data-toggle="dropdown">EXAMPLE
							    <span class="caret"></span></h5>
							    <ul class="dropdown-menu">
							      <li><a href="#">HTML</a></li>
							      <li><a href="#">CSS</a></li>
							      <li><a href="#">JavaScript</a></li>
							    </ul>
						    </div>
					    </li>						    

					  	

					    <li class="pull-right top ">
					    	<ul class="list-inline">
						    	<li><div id="search" class="color"></div></li>
							    <li><span class="glyphicon glyphicon-search left " onclick="test()"></span></li>
							</ul>						    			    	
					    </li>		

					    	  <li class="pull-right top left">
						   <a href=""><span class="glyphicon glyphicon-globe left"></span></a>
					    </li>

					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="main">    <!-- main-cintent -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">			
					<ul>
						<li class="list-unstyled"><h3>HTML and CSS</h3></li>
						<?php
						$all_categories=$db->getMenus("menus","menu_id,name","status=1");
						foreach ($all_categories as $category) {
						extract($category);
						?>
						<li><a href="index.php?menu_id=<?=$menu_id;?>"><?=$name;?></a></li>
						<?php
						}
						?>
					</ul>			
				</div>
				<div class="col-md-10">
						<?php 
											
					 	if (isset($_REQUEST['menu_id'])) {
					 		$menu_id=$_REQUEST['menu_id'];
					 		extract($db->getById("menus","*","menu_id=$menu_id"));
					 		echo "
					 		
					 		<div class='container-fluid'>
						 		<div class='row'>
							 		<div class='col-md-2'>
							 			<div class='panel panel-info'>
											<div class='panel-heading'>title</div>
											<div class='panel-body'>$content</div>
											<div class='panel-heading'>pro_price.00
												<button pid='pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
											</div>
										</div>
									<div class='col-md-2'>
							 			<div class='panel panel-info'>
											<div class='panel-heading'>title</div>
											<div class='panel-body'>$content</div>
											<div class='panel-heading'>pro_price.00
												<button pid='pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
											</div>
										</div>
									</div>
									<div class='col-md-2'>
							 			<div class='panel panel-info'>
											<div class='panel-heading'>title</div>
											<div class='panel-body'>$content</div>
											<div class='panel-heading'>pro_price.00
												<button pid='pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
											</div>
										</div>
									</div>
									<div class='col-md-2'>
							 			<div class='panel panel-info'>
											<div class='panel-heading'>title</div>
											<div class='panel-body'>$content</div>
											<div class='panel-heading'>pro_price.00
												<button pid='pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
											</div>
										</div>
									</div>
								</div>														
							</div>";

							
							
					 	}

					 
					  ?>
				</div>
			</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>