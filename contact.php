
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="style_contact.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php 
		include 'logger.php'; 
		$log="Searched for contact details.";
		logger($log);
	?>
    
<div class="banner">
	<img src="banner_mic.jpg" class="banner" >
</div>

<ul>
  <li><a href="index.php">iWallet</a></li>
  <li><a href="add_transaction.php">Add Transaction</a></li>
  <li><a href="depuneri.php">Depuneri</a></li>
  <li><a href="cheltuieli.php">Cheltuieli</a></li>
  <li><a class="active" href="contact.php">Contact</a></li>
  <li><a href="index.php?logout='1'">Logout</a></li>
</ul>
<div class="titlu">Contact us</div>
<div class="email">Email: teodor.hosu@student.unitbv.ro</div>
<div class="telefon">Telefon: +40737051464</div>
<div class="adresa">Adresa: Brasov, 25 Memorandullui 5000045</div>
</body>
</html>