<?php
	function init() {
		//	Initialising Security systems and then databases
		try {
			$Users_databases = new PDO('mysql:host=localhost;dbname=Users', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$Sections_database = new PDO('mysql:host=localhost;dbname=Sections', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$Topics_database = new PDO('mysql:host=localhost;dbname=Topics', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$RSS_Topic_flux_generator = new PDO('mysql:host=localhost;dbname=Topic_RSS', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
	}
init()
?>