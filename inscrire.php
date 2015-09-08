<?php

	$dsn = 'mysql:host=localhost;dbname=forumlepoles';
	$user = 'root';
	$pass = '';

	$pdo = new PDO(
		$dsn,
		$user,
		$pass
	);

<<<<<<< HEAD
if ( $request ) {
	 header('Location: inscrire.html');
	 
} else {

	//header('Location: inscription.html');
	echo "<h2>Email déjà utilisé</h2>";

}
=======
	if ( $_POST['passwordA'] !== $_POST['passwordB'] ) {
		header('Location: error-password.html');
		die();
	}

	$request = $pdo->query(
		'SELECT * FROM users WHERE email="' . $_POST['pseudo'] . '","' . $_POST['email'] . '", "' . $_POST['passwordA'] . '");'
	);
	$result = $request->fetchAll();

	if ( count($result) > 0 ) {
		header('Location: error-email.html');
		die();
	} else {
		$requestB = $pdo->query('INSERT INTO users ( pseudo, email, password ) VALUES ("' . $_POST['pseudo'] . '","' . $_POST['email'] . '", "' . $_POST['passwordA'] . '");');
	}
	header('Location: acc.html');
>>>>>>> origin/master
