<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style_index2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>   
    <?php 
		include 'logger.php';
		if (isset($_SESSION['username'])) : 
			$log="Logged in succesfully";
			logger($log);
		endif	
	?>
    
<div class="banner">
	<img src="banner_mic.jpg" class="banner" >
</div>

<ul>
  <li><a class="active" href="index.php">iWallet</a></li>
  <li><a href="add_transaction.php">Add Transaction</a></li>
  <li><a href="depuneri.php">Depuneri</a></li>
  <li><a href="cheltuieli.php">Cheltuieli</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="index.php?logout='1'">Logout</a></li>
</ul>
<img class="picture" src="index_picture.png">
</body>
</html>