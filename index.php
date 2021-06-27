<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dabra</title>
	<link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>
	<div class="login-page">
		<div class="form">
			<form class="register-form" action="process.php" method="POST">
				<input type="text" name="username" placeholder="username"/>
				<input type="password" name="password" placeholder="password"/>
				<input type="hidden" name="action" value="0">
				<button>create</button>
				<p class="message">Already registered? <a href="#">Sign In</a></p>
			</form>
			<form class="login-form" action="process.php" method="POST">
				<input type="text" name="username" placeholder="username"/>
				<input type="password" name="password" placeholder="password"/>
				<input type="hidden" name="action" value="1">
				<button>login</button>
				<p class="message">Not registered? <a href="">Create an account</a></p>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="./js/index.js"></script>
</body>
</html>