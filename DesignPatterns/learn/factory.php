<?php

interface Logistics 
{
  public static function createInstance();
}

interface Transport
{
  public function deliver();
}



class Truck implements Transport
{
  public function deliver()
  {
    echo "Deliver Via Truck";
  }
}


class Ship implements Transport
{
  public function deliver()
  {
    echo "Deliver Via Ship";
  }
}

class RoadLogistics implements Logistics
{
    public static function createInstance()
    {
      return new Truck();
    }
}


class SeaLogistics implements Logistics
{
  public static function createInstance()
  {
    return new Ship();
  }
}


$obj = RoadLogistics::createInstance();
$obj->deliver();
