<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","deadmin123","chat_system");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>