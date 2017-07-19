<?php
	require_once(dirname(__FILE__)."/log/mod_cpxlog/facade/cpxlog_Facade.php");

	$cpxLog = new Cpxlog_Facade();
	$r = $cpxLog->log(1, "Ejemplo");

	var_dump($r);
?>