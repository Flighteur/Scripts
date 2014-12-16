<?php
    define('DB_HOST', '127.0.0.1'); // IP/URL of the SQL Server
    // define the user to connect to the SQL Server
    define('DB_ROOT_USER', 'root');
    define('DB_ROOT_PASS', ''); // NEED ENCRYPTION

    function create_db($name) {
        // the database you want to create
        $Usersdb = 'Users';
        // specific user for this particular database
        $dbuser = 'SmartBot';
        $dbpass = 'test';
        try {
            // login with root user
            $dbh = new PDO('mysql:host='.DB_HOST, DB_ROOT_USER, DB_ROOT_PASS);
            // create database
            $dbh->exec(
                "CREATE DATABASE `$dbname`;
                CREATE USER '$dbuser'@'localhost' IDENTIFIED BY '$dbpass';
                GRANT ALL ON `$dbname`.* TO '$dbuser'@'localhost';
                FLUSH PRIVILEGES;"
            )
            or die(print_r($dbh->errorInfo(), true));
            // use database
            $dbh = new PDO('mysql:host='.DB_HOST.';dbname='.$dbname, DB_ROOT_USER, DB_ROOT_PASS);
        } catch (PDOException $e) {
            die("DB ERROR: ". $e->getMessage());
        }
    break;
    }
=======
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