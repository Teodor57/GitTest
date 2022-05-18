<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style_log.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
	<div class="title">Register your iWallet</div>
	<div class="content">
	<form method="post" action="login.php">
		<?php include('errors.php'); ?>	
		<div class="user-details">
			<div class="input-box-email">		
			<span class="details">Username</span>
				<input type="text" name="username" >
			</div>
		</div>
		<div class="user-details">	
			<div class="input-box-email">
			<span class="details">Password</span>
				<input type="password" name="password">
			</div>
		</div>
		
			<button type="submit" class="button" name="login_user">Login</button>
			<p class="already_member">
				Not yet a member? <a href="register.php">Create an account</a>
			</p>
		</form>
	</div>
</div>

</body>
</html>