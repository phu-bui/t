<?php
require "Polygon.php";
class Rectangle extends Polygon{
    public $width;
    public $height;
    public function getArea()
    {
        // TODO: Implement getArea() method.
        return($this->width * $this->height);
    }

    public function getNumberOfSides()
    {
        // TODO: Implement getNumberOfSides() method.
        return(4);
    }
}
?>