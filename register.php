<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register Page</title>
  <link rel="stylesheet" type="text/css" href="style_register.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
	<div class="title">Register your iWallet</div>
	<div class="content">	
		<form method="post" action="register.php">
			<?php include('errors.php'); ?>
			<div class="user-details">
          		<div class="input-box">
            		<span class="details">User Name</span>
					<input type="text" name="username" value="<?php echo $username; ?>">
				</div>
				<div class="input-box">
            		<span class="details">Full Name</span>
					<input type="text" name="fullname" value="<?php echo $fullname; ?>">
				</div>
				<div class="input-box">
            		<span class="details">Password</span>
					<input type="password" name="password_1">
				</div>
				<div class="input-box">
            		<span class="details">Confirm Password</span>
					<input type="password" name="password_2">
				</div>
				<div class="input-box-email">
            		<span class="details">Email</span>
					<input type="email" name="email" value="<?php echo $email; ?>">
				</div>
			</div>
			<button type="submit"class="button" name="reg_user">Register</button>
			<p class="already_member">
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</form>
	</div>
</div>
</body>
</html>