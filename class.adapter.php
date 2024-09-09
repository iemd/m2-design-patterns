<?php
include_once("interface.target.php");

/**
 * Adapter is actually an object that acts like an adapter in real life, in that
 * it converts one thing to another.
 */

class Adapter implements Target
{
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request()
    {
        $this->adaptee->specificRequest();
    }
}
?>
