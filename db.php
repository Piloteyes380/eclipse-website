<?php

// Database connection parameters

$servername = "localhost";

$username = "siasfuvp_eclipse";

$password = "eclipse_12345";

$dbname = "siasfuvp_eclipse";



// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);



// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}



?>