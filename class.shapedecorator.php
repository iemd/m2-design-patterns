<?php
include_once("interface.shape.php");

abstract class ShapeDecorator implements Shape
{
    protected $shape;

    public function __construct(Shape $shape)
    {
        $this->shape = $shape;
    }

    public abstract function draw();
}
