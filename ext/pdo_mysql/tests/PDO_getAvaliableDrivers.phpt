--TEST--
public static array PDO::getAvailableDrivers ( void );
array pdo_drivers ( void );
--SKIPIF--
<?php require 'skipif.inc'; ?>
--CREDITS--
marcosptf - <marcosptf@yahoo.com.br> - #phparty7 - @phpsp - novatec/2015 - sao paulo - br
--FILE--
<?php
print((is_array(PDO::getAvailableDrivers())) ? ("yes") : ("Test failed"));
?>
--EXPECT--
yes
