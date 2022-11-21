<?php
// this php script is for connecting with database
// data has to be fetched from local server

// Username is root
$user = 'root';
$password = '';

// Database name is planBdb
$database = 'Plan B';

// Server is localhost with
// port number 3306
$server ='localhost';
$mysqli = new mysqli($server, $user,
				$password, $database);
// going to use above code


// Checking for connections
if (!$mysqli){
	echo "Connection Unsuccessful!!!";
}

?>