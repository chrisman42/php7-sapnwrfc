--TEST--
setTraceLevel() throws ConnectionException if given an invalid trace level.
--SKIPIF--
<?php include("skipif.inc"); ?>
--FILE--
<?php

function test($param) {
    try {
        \SAPNWRFC\Connection::setTraceLevel($param);
        echo "ok\n";
    } catch(\SAPNWRFC\ConnectionException $e) {
        echo "fail\n";
    }
}

test(-1);
test(4);
--EXPECT--
fail
fail
