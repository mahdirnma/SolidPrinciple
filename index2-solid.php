<?php
interface ShapeInterface{
    public function area();
}
class Triangle{
    public function __construct($z)
    {
        $this->z=$z;
    }

    private $z;

    public function getArea()
    {
        return $this->z+2;
    }

}
class Square implements ShapeInterface{
    private $width;
    public function setWidth($width){
        $this->width=$width;
    }
    public function getWidth(){
        return $this->width;
    }

    public function area(){
        return $this->getWidth()*$this->getWidth();
    }
}
class Circle implements ShapeInterface{
    private $radius;
    public function setRadius($radius){
        $this->radius=$radius;
    }
    public function getRadius(){
        return $this->radius;
    }


    public function area(){
        return $this->getRadius()*$this->getRadius()*3.14;
    }
}
class Calculator{
    public function calculate(ShapeInterface $shape){
        return $shape->area();
    }
}
$square=new Square();
$square->setWidth(20);
$circle=new Circle();
$circle->setRadius(10);
$triangle=new Triangle(5);
$calculator=new Calculator();
echo $calculator->calculate($square);
echo $calculator->calculate($circle);
echo $calculator->calculate($triangle);
