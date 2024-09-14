<?php
include_once("interface.shape.php");

class Circle implements Shape
{
    public function draw()
    {
        return "Drawing circle";
    }
}
?>
