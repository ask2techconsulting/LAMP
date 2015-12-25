<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job Application- Summary</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<?php
session_start();
$_SESSION["fname"] 		= $_POST["fname"];
$_SESSION["lname"] 		= $_POST["lname"];
$_SESSION["email"] 		= $_POST["email"];
$_SESSION["addr1"] 		= $_POST["addr1"];
$_SESSION["addr2"] 		= $_POST["addr2"];
$_SESSION["suburb"] 	= $_POST["suburb"];
$_SESSION["postcode"] 	= $_POST["postcode"];
$_SESSION["country"] 	= $_POST["country"];
$_SESSION["fb_id"] 		= $_POST["fb_id"];
$_SESSION["in_id"] 		= $_POST["in_id"];
?>
<div class="container">
	<h2>Online Job Application - Summary</h2>
	<div class="panel panel-default">
		<div class="panel-heading">Apply using Social Network</div>
		<div class="panel-body">
			<button class="btn btn-primary"><span class="fa fa-facebook"></span> Applied with Facebook</button> <?php if (!empty($_POST["fb_id"])) {?> <span class="glyphicon glyphicon-ok"></span><?php }?>
			<br><br>
			</span><button class="btn btn-primary"><span class="fa fa-linkedin"></span> Applied with LinkedIn</button> <?php if (!empty($_POST["in_id"])) {?> <span class="glyphicon glyphicon-ok"></span><?php }?>
		</div>
		
		<div class="panel-heading">Applicant's Details</div>
		<div class="panel-body">
			<div class="panel panel-default">
				<div class="panel-heading">Personal Information</div>
				<div class="panel-body">
					  <form role="form" action="thanks.php" method="POST">
						<div class="form-group">
						  <label for="fname">First Name:*</label>
						  <input type="text" class="form-control input-sm" name="fname" value="<?php echo $_POST["fname"]?>" disabled>
						</div>
						
						<div class="form-group">
						  <label for="fname">Last Name:*</label>
						  <input type="text" class="form-control input-sm" name="lname" value="<?php echo $_POST["lname"]?>" disabled>
						</div>
						
						<div class="form-group">
						  <label for="fname">Email:*</label>
						  <input type="text" class="form-control input-sm" name="email" value="<?php echo $_POST["email"]?>" disabled>
						</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Address</div>
				<div class="panel-body">
						<div class="form-group">
						  <label for="fname">Street Address 1:*</label>
						  <input type="text" class="form-control input-sm" name="addr1" value="<?php echo $_POST["addr1"]?>" disabled>
						</div>
						<div class="form-group">
						  <label for="fname">Street Address 2:</label>
						  <input type="text" class="form-control input-sm" name="addr2" value="<?php echo $_POST["addr2"]?>" disabled>
						</div>
						<div class="form-group">
						  <label for="fname">Suburb:*</label>
						  <input type="text" class="form-control input-sm" name="suburb" value="<?php echo $_POST["suburb"]?>" disabled>
						</div>
						<div class="form-group">
						  <label for="fname">Postal Code:*</label>
						  <input type="text" class="form-control input-sm" name="postcode" value="<?php echo $_POST["postcode"]?>" disabled>
						</div>						
						<div class="form-group">
						  <label for="fname">Country:*</label>
						  <input type="text" class="form-control input-sm" name="country" value="<?php echo $_POST["country"]?>" disabled>
						</div>
				</div>	  
			</div>
				<div class="form-group">
				</div>
				<button type="submit" name="submit" value="submit" class="btn btn-primary">Confirm Application</button>
				<button type="reset" class="btn btn-default" onclick="window.history.back()">Go Back</button>
			  </form>			
		</div>
		</div>
	</div>	
</div>	
</body>
</html>
