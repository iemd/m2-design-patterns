<?php
include_once("class.adaptee.php");
include_once("class.adapter.php");

/**
 * Adapter design pattern allows objects with incompatible interfaces to collaborate.
 */

$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);

$adapter->request();
?>
