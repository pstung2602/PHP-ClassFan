<?php


class Fan
{
    public $slow =1;
    public $medium=2;
    public $fast=3;
    private $speed=1;
    private $status=false;
    private $radius=5;
    private $color="blue";
    public function setSpeedSlow()
    {
        $this->speed = $this->slow;
    }
    public function setSpeedMedium()
    {
        $this->speed = $this->medium;
    }
    public function setSpeedFast()
    {
        $this->speed = $this->fast;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function turnOn()
    {
        $this->status = true;
    }

    public function turnOff()
    {
        $this->status = false;
    }
    public function toString(){
        if($this->status){
            echo "speed = ".$this->speed." color = ".$this->color." radius = ".$this->radius." fan is on"."<br>";
        }else{
            echo "color = ".$this->color." radius = ".$this->radius." fan is off";
        }

    }



}