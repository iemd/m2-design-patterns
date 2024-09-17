<?php
include_once("class.carbuilder.php");

/**
 * The Builder pattern can be used to create multiple instances (object) of a product (class)
 * with different configurations.
 */

$builder = new CarBuilder();
$car = $builder->setMake('Toyota')
                ->setModel('Corolla')
                ->setYear(2023)
                ->setColor('Blue')
                ->setEngine('2.0L')
                ->setSeats(4)
                ->build();
echo $car;
?>
