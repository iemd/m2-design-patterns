<?php
class Car
{
    private $make;
    private $model;
    private $year;
    private $color;
    private $engine;
    private $seats;

    public function setMake($make)
    {
        $this->make = $make;
    }
    public function setModel($model)
    {
        $this->model = $model;
    }
    public function setYear($year)
    {
        $this->year = $year;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }
    public function setSeats($seats)
    {
        $this->seats = $seats;
    }
    public function build()
    {
        return $this;
    }

    public function __toString()
    {
        return "Car: make={$this->make}, model={$this->model}, year={$this->year},
                     color={$this->color}, engine={$this->engine}, seats={$this->seats}";
    }
}
?>
