<?php
include_once("class.shapedecorator.php");

class RedShape extends ShapeDecorator
{
    public function draw()
    {
        $result = $this->shape->draw();

        echo "$result is red"."<br/>";
    }
}
?>
