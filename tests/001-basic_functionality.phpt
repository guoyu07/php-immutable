--TEST--
Test basic functionality
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc'); ?>
--FILE--
<?php

$immutable = new Immutable(array("x" => 1, "y" => 2));
$immutable->x = "data";


var_dump($immutable->x, $immutable->y);
echo "OK\n";

?>
--EXPECTF--
int(1)
int(2)
OK
