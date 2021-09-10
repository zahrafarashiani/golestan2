<?php	
	$dsn = "mysql:host=localhost;dbname=newData";
	try{
		$pdo = new PDO($dsn, 'root', '');
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>
