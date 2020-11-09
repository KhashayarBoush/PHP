<?php 
	
	$url = $_SERVER['PHP_SELF'];

	header("Refresh: 1; url=$url");

	$time = date('r', time() );
		echo date("$time");

?>