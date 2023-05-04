<?php

namespace App\Http\Controllers;

use App\Models\ShapeFactory;
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
}
