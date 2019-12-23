<?php
session_start();
include("db.php");
if(isset($_REQUEST['action']) && $_REQUEST['action']=='logout'){
	session_destroy();
	header("location:index.php");
}
if(!isset($_SESSION['name'])){
header("location:index.php");
}
include('dashboard_header.php');

if(isset($_REQUEST['submit_menu'])){
	extract($_REQUEST);
	//echo "Yes";
if($db->Insert("menus","name='$name', content='$content', status='$status'")){
	header("location:dashboard.php?action=menu&status=success");
	}
	else{
		header("location:dashboard.php?action=menu&status=fail");
	}
}


/*if(isset($_REQUEST['submit_update'])){
	  extract($_REQUEST);
	    if($db->Update("menus","name='$name',content=$content,status=$status","")){
	    	header("location:dashboard.php");
	    }
	else{
		$msg="Update Fail!";
	}
}



if(isset($_REQUEST['menu_id'])){
	
	$menu_id=$_REQUEST['menu_id'];
	if($db->getById("menus","*","menu_id=$menu_id")!=false){
		extract($db->getById("menus","*","menu_id=$menu_id"));
	}
}*/




if(isset($_REQUEST['menup_id'])){
	
	$menup_id=$_REQUEST['menup_id'];
	if($db->getById("menus","*","menu_id=$menup_id")!=false){
		extract($db->getById("menus","*","menu_id=$menup_id"));
	}
}


if(isset($_REQUEST['submit_update'])){
	  extract($_REQUEST);
	    if($db->Update("menus","name='$name',content='$content',status='$status'","menu_id=$menup_id")){
	    	header("location:dashboard.php");
	    }
	else{
		$msg="Update Fail!";
	}
}




if(isset($_REQUEST['cdel_id'])){
	$cdel_id=$_REQUEST['cdel_id'];
	if($db->Delete("menus","menu_id='$cdel_id'")){
		header("location:dashboard.php");
		?>
		<span><strong>Delete Success</strong></span>
		<?php
		}
		else{
			?>
		<span><strong>Delete Fail!</strong></span>
			<?php
				}
}

if(isset($_REQUEST['menuu_id'])){
	$menuu_id=$_REQUEST['menuu_id'];
	?>

	<span class="text text-danger"><strong>Do you want to delete?</strong></span>
					&nbsp;&nbsp;<a class="btn btn-danger" href="dashboard.php?cdel_id=<?=$menuu_id;?>">Yes</a>
					&nbsp;&nbsp;<a class="btn btn-success" href="dashboard.php">No</a>
						<?php
				}
















?>
	<main>
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12">




					<?php
						if(isset($_REQUEST['action']) AND $_REQUEST['action']=='menu'){
							echo "<h2>Manage Menu</h2>";
							if(isset($_REQUEST['status']) AND $_REQUEST['status']=='success'){
								echo "Menu Insert Success";
							}
							if(isset($_REQUEST['status']) AND $_REQUEST['status']=='fail'){

								echo "Menu Insert Fail";
							}
							?>
							<form action="dashboard.php" method="post">
								<div class="form-group">
									<label for="menu">Menu</label>
									<input type="text" name="name" class="form-control" id="menu">
								</div>
								<div class="form-group">
									<label for="content">Content</label>
									<textarea class="form-control" name="content" id="content"></textarea>

									<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'content' );
           </script>
								</div>
								<div class="form-group">
									<label for="status">Status</label>
									<select class="form-control" name="status">
										<option value="0">Unpublish</option>
										<option value="1">Published</option>
									</select>
								</div>
								<button type="submit" name="submit_menu" class="btn btn-default">Submit</button>
							</form>
		<table class="col-md-8 table table-bordered table-hover table-stripped table-condensed">
	<tr>
		<th>Name</th>
		
		<th>Status</th>
		
		<th>Action</th>
	</tr>
	<?php
	$menus=$db->getAll("menus","*");
		foreach ($menus as $menu) {	
			extract($menu);
	?>
	<tr>
		<td><?=$name;?></td>
		<td><?=$status==1?"Publish":"Unpublish";?></td>
		<td><a class="btn btn-info glyphicon glyphicon-pencil" href="dashboard.php?action=edit_menu&menup_id=<?=$menu_id;?>"></a>&nbsp;<a class="btn btn-danger glyphicon glyphicon-remove" href="dashboard.php?menuu_id=<?=$menu_id;?>"></a>
	</tr>
	<?php
}
?>
</tabl
					<?php
						}
						elseif(isset($_REQUEST['action']) AND $_REQUEST['action']=='edit_menu'){
							$menu_id=$_REQUEST['menu_id'];
							extract($db->getById("menus","*","menu_id=$menu_id"));
							echo "<h2>Edit Menu</h2>";
							?>
							<form action="dashboard.php" method="post">
								<div class="form-group">
									<label for="menu">Menu</label>
									<input type="text" name="name" class="form-control" value="<?=$name;?>" id="menu">
								</div>
								<div class="form-group">
									<label for="content">Content</label>
									<textarea class="form-control" name="content" id="content">
										<?=$content;?>
									</textarea>

									<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'content' );
           </script>
								</div>
								<div class="form-group">
									<label for="status">Status</label>
									<select class="form-control" name="status">
										<option value="0">Unpublish</option>
										<option value="1">Published</option>
									</select>
								</div>
								<button type="submit" name="submit_update" class="btn btn-default">Submit</button>
							</form>
<?php
						}



						
						elseif(isset($_REQUEST['action']) AND $_REQUEST['action']=='category'){
							echo "<h2>Manage Categories</h2>";

						}
						elseif(isset($_REQUEST['action']) AND $_REQUEST['action']=='article'){
							echo "<h2>Manage Articles</h2>";

						}
						elseif(isset($_REQUEST['action']) AND $_REQUEST['action']=='user'){
							echo "<h2>Manage Users</h2>";

						}
						else{
							echo "<h2>Dashboard</h2>";
						}
					?>
				</div>
			
			</div>
		</div>
	</main>
	<?php
	include("footer.php");
	?>