<?php

namespace App\Http\Controllers;

use App\Models\BydFactory;
use App\Models\CarFactory;
use App\Models\ChineseHouseBuilder;
use App\Models\HouseBuilder;
use App\Models\ShapeFactory;
use App\Models\TeslaFactory;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    /**
     * factory mode
     */
    public function factory()
    {
        $shapeFactory = new ShapeFactory();
        $shape1 = $shapeFactory->getShape('circle');
        $shape2 = $shapeFactory->getShape('square');
        $shape3 = $shapeFactory->getShape('rectangle');
        $shape1->draw();
        $shape2->draw();
        $shape3->draw();
    }

    /**
     * abstract factory mode
     */
    public function abstractFactory()
    {
        $this->getCarName(new BydFactory());
        $this->getCarName(new TeslaFactory());
    }

    private function getCarName(CarFactory $carFactory)
    {
        $car = $carFactory->createCar();
        return $car->name();
    }

    /**
     * builder mode
     */
    public function builder(ChineseHouseBuilder $chineseHouseBuilder)
    {
        $house = $this->getHouse($chineseHouseBuilder);
        $house->show();
    }

    public function getHouse(HouseBuilder $houseBuilder) {
        return $houseBuilder->buildWar()->buildWindows()->buildDoor()->getHouse();
    }
}
