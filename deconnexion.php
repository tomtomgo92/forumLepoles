<?php
	session_destroy();

	$dsn = 'mysql:host=localhost;dbname=';
	$pass = '';

	$pdo = new PDO(
		$dsn,
		$user,
		$pass
	);

	$request = $pdo->query(
		'SELECT * FROM users WHERE email="' . $_POST['email'] . '" AND password = "' . $_POST['password']. '";'
	);

	$result = $request->fetchAll();

	if ( count($result) > 0 ) {
		
		$_SESSION['user'] = $result[0];
		header('Location: admin.php');

	} else {

		header('Location: deconnection.html');

	}
?>