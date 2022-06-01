<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Transaction</title>
	<link rel="stylesheet" type="text/css" href="style_add_transaction.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php 
		include 'logger.php'; 
		$log="Transaction added succesfully.";
		logger($log);
	?>
    
<div class="banner">
	<img src="banner_mic.jpg" class="banner" >
</div>

<ul>
  <li><a href="index.php">iWallet</a></li>
  <li><a class="active" href="add_transaction.php">Add Transaction</a></li>
  <li><a href="depuneri.php">Depuneri</a></li>
  <li><a href="cheltuieli.php">Cheltuieli</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="index.php?logout='1'">Logout</a></li>
</ul>

<div class="container">
	<div class="title">Add a transaction</div>
	<div class="content">	
		<form method="post" action="add_transaction.php">
			<?php include('errors.php'); ?>
			<div class="user-details">
          		<div class="input-box">
            		<span class="details">Tip</span>
					<input type="text" name="tip" value="<?php echo $tip; ?>">
				</div>
				<div class="input-box">
            		<span class="details">Suma</span>
					<input type="text" name="suma" value="<?php echo $suma; ?>">
				</div>
				<div class="input-box">
            		<span class="details">Data</span>
					<input type="text" name="data">
				</div>
				<div class="input-box">
            		<span class="details">Descriere</span>
					<input type="text" name="descriere">
				</div>
			</div>
			<button type="submit"class="button" name="adauga">Adauga</button>
		</form>
	</div>
</div>

</body>
</html>