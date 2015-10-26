<?php
	$dsn = 'mysql:host=localhost;dbname=forumlepoles';
	$user = 'root';
	$pass = '';

	$pdo = new PDO(
		$dsn,
		$user,
		$pass
	);


	$request = $pdo->query('SELECT * FROM articles');
	$result = $request->fetchAll();

	//print_r($result);

	for ( $i = 0; $i < count($result); $i++ ) {
?>

<h2><?=$result[$i]['title']?></h2>


<?php
	}
?>