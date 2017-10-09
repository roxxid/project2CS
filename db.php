<?php

// Connect to MySQL
$conn = mysqli_connect('localhost', 'root', '', 'text_db');

// Test Connection
if(mysqli_connect_errno()){
	echo 'DB Connection Error: '.mysqli_connect_error();
}

date_default_timezone_set("America/New_York");

?>