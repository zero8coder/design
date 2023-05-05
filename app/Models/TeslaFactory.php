<?php


namespace App\Models;


class TeslaFactory extends CarFactory
{
    public function createCar(): Tesla
    {
        return new Tesla();
    }
}
