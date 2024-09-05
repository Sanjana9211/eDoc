<?php
	
    $host = "localhost";
    $user = "root";
    $pwd  = "03san@MYSQL";
    $db   = "edoc";
    $database= new mysqli($host,$user,$pwd,$db);
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>