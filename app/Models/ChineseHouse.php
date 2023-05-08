<?php


namespace App\Models;


class ChineseHouse
{
    private $door;
    private $wall;
    private $windows;

    public function setDoor($door)
    {
        $this->door = $door;
    }

    public function setWall($wall)
    {
        $this->wall = $wall;
    }

    public function setWindows($windows)
    {
        $this->windows = $windows;
    }

    public function show()
    {
        echo "<pre>";
        print_r($this);
    }
}
