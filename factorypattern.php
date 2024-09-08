<?php
include_once("class.dbmanager.php");

/**
 * The DBManager works as a Factory, which encapsulates all the complexities behind the scene
 * and delivers two products.
 * Factory simplifies programming by encapsulating the difficulties inside it.
 */
$dm = new DBManager();
$dm->setDriver("mysql");
$dm->connect("host", "user", "db", "pwd");

$dm->setDriver("pgsql");
$dm->connect("host", "user", "db", "pwd");
?>
