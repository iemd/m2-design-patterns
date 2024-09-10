<?php
include_once("class.singleton.php");

/**
 * The main purpose of the Singleton pattern is to deliver a single instance of object
 * no matter how many times you instantiate it.
 */

$a = new MySQLManager();
$b = new MySQLManager();
$c = new MySQLManager();
$d = new MySQLManager();
$e = new MySQLManager();
?>
