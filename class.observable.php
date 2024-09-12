<?php
include_once("interface.observer.php");

class Observable
{
    private $observers = array();

    public function register($object)
    {
        if($object instanceof Observer)
        {
            $this->observers[] = $object;
        }
        else
        {
            echo "The object must implement Observer interface"."<br/>";
        }
    }

    public function stateChange()
    {
        foreach($this->observers as $observer)
        {
            $observer->notify();
        }
    }
}
?>
