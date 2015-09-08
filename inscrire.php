<?php

	$dsn = 'mysql:host=localhost;dbname=forumlepoles';
	$user = 'root';
	$pass = '';

	$pdo = new PDO(
		$dsn,
		$user,
		$pass
	);

	if ( $_POST['passwordA'] !== $_POST['passwordB'] ) {
		header('Location: error-password.html');
		die();
	}

	$request = $pdo->query(
		'SELECT * FROM users WHERE email="' . $_POST['email'] . '", , "' . $_POST['passwordA'] . '";'
	);
	$result = $request->fetchAll();

	if ( count($result) > 0 ) {
		header('Location: acc.html');
		die();
	} else {
		$requestB = $pdo->query('INSERT INTO users ( email, password ) VALUES ("' . $_POST['email'] . '", "' . $_POST['passwordA'] . '");');
	}
	header('Location: connection.html');
?>
