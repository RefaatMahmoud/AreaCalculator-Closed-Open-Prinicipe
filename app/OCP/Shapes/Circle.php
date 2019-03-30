<?php 

namespace App\OCP\Shapes;

class Circle {

    private $raduis;

    const PI = 3.14;

    public function __construct($raduis)
    {
        $this->raduis = $raduis;
    }

    public function area()
    {
        return self::PI * pow($this->raduis,2);
    }
}