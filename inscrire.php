<?php

	$dsn = 'mysql:host=localhost;dbname=forumlepoles';
	$user = 'root';
	$pass = '';

	$pdo = new PDO(
		$dsn,
		$user,
		$pass
	);


	$request = $pdo->query(
		'SELECT * FROM users WHERE email="' . $_POST['email'] . '";'
	);
	$result = $request->fetchAll();

	if ( count($result) > 0 ) {
		header('Location: error-email.html');
		die();
	} else {
		$requestB = $pdo->query('INSERT INTO users ( pseudo, email, password ) VALUES ("' . $_POST['pseudo'] . '","' . $_POST['email'] . '", "' . $_POST['password'] . '");');
	}
	header('Location: acc.html');
