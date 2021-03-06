<!DOCTYPE html>
<html>
<head>
	<title>My Online Store</title>
	<link rel="stylesheet" type="text/css" href=css/bootstrap.css>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</head>

<?php include "ow_actionload_item.php" ?>
<body>

<div class="container">
<h1><label>My Online Store</label></h1>
</div>

<div class="container">
	<div class="row">
		<div class="container"> 
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-md-12 col-md-offset-9">	
						<?php echo "User: ".$_SESSION['UserEmail']; ?>
					</div>

						<!--navigation bar -->
						<div class="col-md-12">
							<nav class="navbar navbar-inverse">
							  <div class="container-fluid">
								<div class="navbar-header">
								  <a class="navbar-brand" href="#">LOGO</a>
								</div>
								<ul class="nav navbar-nav">
								  <li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown">Account<span class="caret"></span></a>
									<ul class="dropdown-menu">
									  <li><a href="ow_page_profile.php">Profile</a></li>
									  <li><a href="#">Settings</a></li>
									  <li><a href="ow_action_logout.php">Logout</a></li>
									</ul>
								  </li>
								  
								  <li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown">Products<span class="caret"></span></a>
									<ul class="dropdown-menu">
									  <li><a href="ow_item_list.php">View all Items</a></li>
									  <li><a href="#">Promo Items</a></li>
									  <li><a href="#">Search by Category</a></li>
									</ul>
								  </li>
								  <li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown">Transactions<span class="caret"></span></a>
									<ul class="dropdown-menu">
									  <li><a href="#">Track My Orders</a></li>
									  <li><a href="#">Transaction History</a></li>
									  <li><a href="#">Request Item Return</a></li>
									</ul>
								  </li>
								</ul>
							  </div>
							</nav>
						</div>
						<!-- navigation bar -->
				
					<div class='col-md-8'>
						<form action="ow_action_item_add.php" method="POST" 
						enctype="multipart/form-data">
							<div class="form-group">
								<div class="col-md-4">
									<label>Item Name:</label>
									<input type="text" name="itemname" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<label>Item Description</label>
									<input type="text" name="itemdesc" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-4">
									<label>Item Price</label>
									<input type="text" name="itemprice" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-4">
									<label>Item Type</label>
									<input type="text" name="itemtype" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-4">
									<label>Item Status</label>
									<input type="text" name="itemstatus" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-4">
									<label>Item Image</label>
									<input type="file" name="itemimage">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<br>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<input type="submit" value="Save" name="saveitem" class="btn default">
									<button class="btn default"><a href="ow_item_list.php">Cancel</a></button>	
								</div>
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


</html>