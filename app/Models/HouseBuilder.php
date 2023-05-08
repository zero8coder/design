<?php


namespace App\Models;


interface HouseBuilder
{
     function buildDoor();

     function buildWindows();

     function buildWar();

     function getHouse();

     function reset();
}
