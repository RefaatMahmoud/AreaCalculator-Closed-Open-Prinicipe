<?php

namespace App\Http\Controllers;

use App\OCP\AreaCalculator;
use App\OCP\Shapes\Circle;
use App\OCP\Shapes\Square;
use App\OCP\Shapes\Rectangle;

class HomeContoller extends Controller
{
    public function index()
    {
        $shapes = [
            new Square(2),
            new Circle(3),
            new Circle(5),
            new Rectangle(3,3)
        ];
        
        $areas = new AreaCalculator($shapes);

        $sum = $areas->sum();

        return view('welcome',compact('sum'));
    }
}
