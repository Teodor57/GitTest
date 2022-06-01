<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="style_depuneri.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php 
		include 'logger.php'; 
		$log="Depposit page visited";
		logger($log);
	?>
    
<div class="banner">
	<img src="banner_mic.jpg" class="banner" >
</div>

<ul>
  <li><a href="index.php">iWallet</a></li>
  <li><a href="add_transaction.php">Add Transaction</a></li>
  <li><a class="active" href="depuneri.php">Depuneri</a></li>
  <li><a href="cheltuieli.php">Cheltuieli</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="index.php?logout='1'">Logout</a></li>
</ul>

<?php
$sql = "SELECT tip, suma, data, descriere FROM tranzactii";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["tip"]==="depunere")
		echo "Suma: " . $row["suma"]. " - Data: " . $row["data"]. " " . "Descriere: ".$row["descriere"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
</body>
</html>
