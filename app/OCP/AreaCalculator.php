<?php 

namespace App\OCP;

class AreaCalculator {
    
    private $shapes ;

    public function __construct($shapes = array())
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $total = 0 ;
        foreach($this->shapes as $shape){
            $total += $shape->area();
        }
        return $total;        
    }
}