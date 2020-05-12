<?php
class Figure{
    public $area;
    public $color;
    const Sides_Count = "";
    public function __construct()
    {
    }
    public function  infoAbout(){
         echo "This is Geometric shape!"." ".Figure::Sides_Count;
         echo '<br>';
}
}