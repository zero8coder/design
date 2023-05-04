<?php


namespace App\Models;


class ShapeFactory
{
    public function getShape(string $type)
    {
        switch ($type) {
            case 'circle': return new Circle;
            case 'square': return new Square;
            case 'rectangle': return new Rectangle;
        }
        return false;
    }
}
