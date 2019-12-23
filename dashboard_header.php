<!DOCTYPE html>
<html>
<head>
	<title>Professional Project</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
    <!-- <script src="ckeditor/ckeditor.js"></script> -->
    <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
</head>
<body>
	<header>
		<!--Topbar-->
		<section class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<div class="logo">
						<h3>w3schools</h3>
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<div class="menubar pull-right">
							<ul class="list-unstyled list-inline">
								<li class="text-uppercase"><a href="dashboard.php">Dashboard</a></li>
								<li class="text-uppercase"><a href="dashboard.php?action=menu">Manage Menus</a></li>
								<li class="text-uppercase"><a href="dashboard.php?action=category">Manage Categories</a></li>
								<li class="text-uppercase"><a href="dashboard.php?action=article">Manage Article</a></li>
								<li class="text-uppercase"><a href="dashboard.php?action=user">Manage User</a></li>
								
							</ul>
							<span style="color:#fff">You're Logged in as <?=$_SESSION['name'];?></span>&nbsp;<a style="text-decoration: none; color:red" href="dashboard.php?action=logout">Logout</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Topbar-->
	</header>