--TEST--
close() closes the connection and returns true if the connection was open.
--SKIPIF--
<?php include("should_run_online_tests.inc"); ?>
--FILE--
<?php
$config = include "sapnwrfc.config.inc";

$c = new \SAPNWRFC\Connection($config);

var_dump($c->close());
--EXPECT--
bool(true)
