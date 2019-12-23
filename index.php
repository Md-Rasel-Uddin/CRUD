<?php
session_start();
include("db.php");


if(isset($_REQUEST['login'])){
	extract($_REQUEST);
	$password=sha1($password);

	if($db->getById("subscribers","*","email='$email' AND password='$password' AND status=1")!=false){
		$info=$db->getById("subscribers","*","email='$email' AND password='$password' AND status=1");
		 $_SESSION['name']=$info['name'];
		 header("location:dashboard.php");
	}
	else{
		echo "Invalid Username/Password";
	}
}
if(isset($_SESSION['name'])){
header("location:dashboard.php");
}
?>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					
					
				</div>
				<div class="col-lg-6" style="height: 500px; margin: 0 auto">
					<form action="index.php" method="post">
					<table class="table table-bordered table-hover table-stripped table-condensed table-responsive">
						<tr>
							<th>Email: </th>
							<td><input type="email" class="form-control" name="email" placeholder="jhon@doe.com"></td>
						</tr>
						<tr>
							<th>Password: </th>
							<td><input type="password" class="form-control" name="password" placeholder="******"></td>
						</tr>

						<tr>
							
							<td colspan="2" class="text-center"><input class="btn btn-primary" type="submit" name="login" value="Login"></td>
						</tr>
						
					</table>
					</form>
				</div>
				<div class="col-lg-3">
					
					
				</div>
			</div>
		</div>
	</main>
	<?php
	include("footer.php");
	?>