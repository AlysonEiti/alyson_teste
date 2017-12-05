<?php
	$con = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($con, "testeweb");

	if(!$con) {
		die("Não foi possível conectar ao banco de dados");
	}

?>