<?php

	$mysqli = new mysqli('127.0.0.1', 'root', '', 'sistema');

	$host = '127.0.0.1';
	$user = 'root';
	$pw =  '';
	$db =  'sistema';

	if ($mysqli -> connect_error) {
		die('Error en la conexion' . $mysqli -> connect_error);
	}

?>