<?php
include_once("class.car.php");

class CarBuilder
{
    private $car;

    public function __construct()
    {
        $this->car = new Car();
    }

    public function setMake($make)
    {
        $this->car->setMake($make);
        return $this;
    }
    public function setModel($model)
    {
        $this->car->setModel($model);
        return $this;
    }
    public function setYear($year)
    {
        $this->car->setYear($year);
        return $this;
    }
    public function setColor($color)
    {
        $this->car->setColor($color);
        return $this;
    }
    public function setEngine($engine)
    {
        $this->car->setEngine($engine);
        return $this;
    }
    public function setSeats($seats)
    {
        $this->car->setSeats($seats);
        return $this;
    }
    public function build()
    {
        return $this->car;
    }
}
?>
