<?php
	//	Initialising Security systems and then databases
	define('DB_HOST', 'localhost');
	define('DB_ROOT_USER', 'root');
	define('DB_ROOT_PASS', '');
	
	$Users = 'Users';
	$Sections = 'Sections';
	$Topics = 'Topics';

	try {
		
		/*$Users = new PDO('mysql:host=localhost;dbname=Users', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$Sections = new PDO('mysql:host=localhost;dbname=Sections', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$Topics = new PDO('mysql:host=localhost;dbname=Topics', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$Topics_RSS = new PDO('mysql:host=localhost;dbname=Topic_RSS', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));*/
	}
	catch (Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
}
?>