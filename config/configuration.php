<?php

	//Archivo de configuracion de cpweb

	define('PATH','C:/xampp/htdocs/hotel_proyect');

	define('DB_IP','192.168.86.128');
	define('DB_NAME','reserva_hotel');
	define('DB_USER','adm');
	define('DB_PASS','123');
	define('DB_ENGINE','mysql');
	//define('DB_ENGINE','pgsql'); //Conexion con postgreSQL

	// Constantes del motor de plantillas smarty
	define('TEMPLATE',PATH.'/templates/');
	define('TEMPLATE_c',PATH.'/templates_c/');
	define('CACHE',PATH.'/cache/');
	define('CONFIGS',PATH.'/configs/');
?>
