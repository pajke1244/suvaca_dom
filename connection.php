<?php 
ob_start();
session_start();

$conn= mysqli_connect("localhost","root","","_suvaca");
if (!$conn) {
	echo "ERROR";
}

?>