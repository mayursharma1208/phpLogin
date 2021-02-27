<?php 

    define("DSN", "pgsql:host=localhost;dbname=cgmaps;port=5433");
    define("USERNAME", "postgres");
    define("PWD", "postgres");

	try {
            
            //Create the connection 
            $db = new PDO(DSN, USERNAME, PWD);
            
            //set the PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}
	catch (PDOException $ex) {
            //Display error message
            echo "Connection failed ".$ex->getMessage();
    }




	