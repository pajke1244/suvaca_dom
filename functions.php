<?php 

function pr($arr){
	echo "<pre>";
	print_r($arr);
}

function prx($arr) {

	echo "<pre>";
	print_r($arr);
	die();
	echo "</pre>";
}


function get_safe_value($conn,$string){
	if ($string!='') {
		return	mysqli_real_escape_string($conn,$string);
	}
	
}


?>