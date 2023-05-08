<?php


namespace App\Models;


class ChineseHouseBuilder implements HouseBuilder
{
    private $house;
    public function __construct()
    {
        $this->house = new ChineseHouse();
    }

    public function buildDoor()
    {
        $this->house->setDoor('中式门');
        return $this;
    }

    public function buildWar()
    {
        $this->house->setWall('中式墙');
        return $this;
    }

    public function buildWindows()
    {
        $this->house->setWindows('中式窗户');
        return $this;
    }

    public function reset()
    {
        $this->house = new ChineseHouse();
    }

    public function getHouse()
    {
        $house = $this->house;
        $this->reset();
        return $house;
    }


}
