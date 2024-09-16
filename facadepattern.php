<?php
include_once("class.facade.php");

/**
 * Facade provides a common interface to many objects.
 * In other words, it just simplifies the programming providing a necessary interface,
 * which actually uses a lot of other objects behind the scenes.
 */

$facade = new Facade();

$orderData = [
                'customer_name' => 'John Doe',
                'items' => [
                    ['product_id' => 1, 'quantity' => 2],
                    ['product_id' => 2, 'quantity' => 1]
                ]
            ];

$result = $facade->placeOrder($orderData);

echo $result;
?>
