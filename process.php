<?php 

$postUser = $_POST["username"];
$postPass = $_POST["password"];
$postType = $_POST["action"]; // 0 = register, 1 = login

$queryUserExists = 'SELECT * FROM users WHERE username = :username';
$queryCredentials = 'SELECT * FROM users WHERE username = :username AND password = :password';
$insertUser = 'INSERT INTO users(username, password) VALUES(:username, :password)';

$pdo = require_once 'connect.php';
var_dump($pdo");
/*
try {

	$statement = $pdo->prepare($queryUserExists);
	$statement->bindParam(':username', $postUser, PDO::PARAM_STR);

	$statement->execute();

	$userExists = $statement->fetch(PDO::FETCH_ASSOC);

	if($userExists && $postType == "1") { // Logging in

		// Validate user and password are correct
		$statement = $pdo->prepare($queryCredentials);
		$statement->bindParam(':username', $postUser, PDO::PARAM_STR);
		$statement->bindParam(':password', $postPass, PDO::PARAM_STR);

		$statement->execute();

		$user = $statement->fetch(PDO::FETCH_ASSOC);

		if($user) { // Credentials succeeded
			header("Location: ftp.php", true, 301);
			exit();
		} else { // Credentials failed
			header("Location: index.php", true, 301);
			exit();
		}
	
	} else if(!$userExists && $postType == "0"){// Registering a new user

		// Insert user
		$statement = $pdo->prepare($insertUser);

		$statement->execute([
			':username' => $postUser,
			':password' => $postPass
		]);

		$user_id = $pdo->lastInsertId();

		header("Location: ftp.php", true, 301);
		exit();
	}
	
	header("Location: index.php", true, 301);
	exit();

} catch (PDOException $e) {
	echo $e->getMessage();
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dabra</title>
</head>
<body>
</body>
</html>