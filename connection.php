<?php

// connection info

$servername = 'localhost'; // since our server is local
$username = 'root'; // default username for MySQL
$password = ''; // default pass is empty
$dbname = 'conestogafinance'; // this is the database we created

// Create a connection
$db = new mysqli($servername, $username, $password, $dbname);

//Check for errors
if($db->connect_error){
    die('Connection failed...');
}

?>