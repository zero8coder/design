<?php


namespace App\Models;


class Rectangle extends Shape
{
    public function draw()
    {
        echo '画一个长方形' . '<br>';
    }
}
