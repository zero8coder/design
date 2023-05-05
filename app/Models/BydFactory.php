<?php


namespace App\Models;


class BydFactory extends CarFactory
{
    public function createCar()
    {
        return new Byd;
    }
}
