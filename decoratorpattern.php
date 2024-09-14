<?php
include_once("class.circle.php");
include_once("class.tringle.php");

include_once("class.borderedshape.php");
include_once("class.redshape.php");

/**
 * Using Decorator pattern you can add additional functionalities in an existing object
 * without extending an object.
 */

$circle = new Circle();
$circle = new BorderedShape($circle);
$circle = new RedShape($circle);
$circle->draw();

$tringle = new Tringle();
$tringle = new BorderedShape($tringle);
$tringle = new RedShape($tringle);
$tringle->draw();
?>
