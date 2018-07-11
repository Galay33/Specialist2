<?php
	$dt = date("Y-m-d H:i:s");
	$page = $_SERVER['REQUEST_URI'];
	$ref = $_SERVER['HTTP_REFERER'];
	$path = "$dt | $page | $ref\n";
	$logFile = fopen(PATH_LOG, "a");
	fwrite($logFile, $path);
	fclose($logFile);