<?php
class Square{
    private $width;
    public function setWidth($width){
        $this->width=$width;
    }
    public function getWidth(){
        return $this->width;
    }
}
class Circle{
    private $radius;
    public function setRadius($radius){
        $this->radius=$radius;
    }
    public function getRadius(){
        return $this->radius;
    }
}
class Calculator{
    public function calculate($shape){
        if ($shape instanceof Square){
            return $shape->getWidth()*$shape->getWidth();
        }elseif ($shape instanceof Circle){
            return $shape->getRadius()*$shape->getRadius()*3.14;
        }
    }
}
$square=new Square();
$square->setWidth(20);
$circle=new Circle();
$circle->setRadius(10);
$calculator=new Calculator();
echo $calculator->calculate($square);
echo "<br>";
echo $calculator->calculate($circle);