<?php

session_start();

$dsn = 'mysql:host=localhost;dbname=forumlepoles';
$user = 'root';
$pass = '';

$pdo = new PDO(
	$dsn,
	$user,
	$pass
);

$request = $pdo->query(
	'INSERT INTO `users`(id, pseudo, email, password) VALUES (NULL,"' . $_POST['pseudo'] . '","' . $_POST['email']. '","' . $_POST['password']. '");'
);
$request2= $pdo->query(
	'SELECT email FROM users WHERE email="' . $_POST['email'] . '";'
	);
$result = $request2->fetchAll();


if ( $request ) {
	 header('Location: inscrire.html');
	 
} else {

	//header('Location: inscription.html');
	echo "<h2>Email déjà utilisé</h2>";

}
