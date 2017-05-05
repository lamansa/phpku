<?php
	//---- stringtest.php ----
	require_once 'index.php';
	require_once 'PHPUnit.php';
	$suite  = new PHPUnit_TestSuite("StringTest");
	$result = PHPUnit::run($suite);
	echo $result->toString();
?>