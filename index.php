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
	<link rel="stylesheet" type="text/css" href="style_index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- <div class="content">
  	
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div> -->

<div class="banner">
	<div class="logo">
		<a href="index.php">
			iWallet
		</a>
	</div>
	<div class="bannner_imagine">
		<img src="banner_mic.jpg" class="banner_imagine">
	</div>
</div>
<div class="meniu">
	<div class="add_transaction">
		<div class="button_add">AddTransaction</div>
	</div>
	<div class="depuneri">
		<div class="buton_simplu">Castiguri</div>
	</div>
	<div class="cheltuieli>">
		<div class="buton_simplu">Cheltuieli</div>
	</div>
	<div class="contact">
		<div class="buton_simplu">Contact</div>
	</div>
</div>
<div class="content">
	<div class="sold"></div>
	<div class="tranzactii"></div>
</div>
<div class="meniu_profil">
	<div class="profil">Username</div>
	<div class="logout">
		<a href="index.php?logout='1'">logout</a>
	</div>
</div>
		
</body>
</html>