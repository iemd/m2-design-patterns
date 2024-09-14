<?php
include_once("class.shapedecorator.php");

class BorderedShape extends ShapeDecorator
{
    public function draw()
    {
        $result = $this->shape->draw();

        echo "$result has border";
    }
}
?>
