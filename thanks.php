<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job Application- Confirmation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<?php
if (!empty($_POST["submit"]))
{
	require_once("class.MySQL.php");
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname='test';
	$oMySQL = new MySQL($dbname,$dbuser,$dbpass,$dbhost);
	session_start();
	
	$flds = array(
	"firstName" 	=> $_SESSION["fname"],
	"lastName" 		=> $_SESSION["lname"],
	"emailAddr" 	=> $_SESSION["email"],
	"address1" 		=> $_SESSION["addr1"],
	"address2" 		=> $_SESSION["addr2"],
	"suburb" 		=> $_SESSION["suburb"],
	"postcode" 		=> $_SESSION["postcode"],
	"country" 		=> $_SESSION["country"],
	"fb_id" 		=> $_SESSION["fb_id"],
	"in_id" 		=> $_SESSION["in_id"]);
	
	$oMySQL->Insert($flds,"jobapplication");
	header('Location:thanks.php');
	exit;
}
?>
<div class="container">
	<h2>Online Job Application - Confirmation</h2>
	<div class="panel panel-default">
		<div class="panel-heading">Thanks!</div>
		<div class="panel-body">
			<label for="thanks">Thank you for submitting your application. Our recruitment team will be getting in touch with you in the next coming few days.</label>
		</div>
	</div>	
</div>	
</body>
</html>
