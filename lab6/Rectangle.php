<!DOCTYPE html>
<html>
<head>
    <style>
        .arr{
            margin-left: 40px;
            margin-right: auto;
            margin-top: 25px;
        }
    </style>
</head>
</html>
<?php
include 'Figure.php';
class Rectangle extends Figure{
    private $a;
    private $b;
    const Sides_Count = 4;
    public function __construct($a,$b,$color)
    {
        echo $this->a = $a;
        echo '<br>';
        echo $this->b = $b;
        echo '<br>';
        echo $this->color = $color;
        echo '<br>';
    }
public function __destruct()
{
}

    public function getArea(){
        $area = $this->a * $this->b;
        echo "<b>Area of Rectangle:</b>".$area;
        echo '<br>';
    }
    final function infoAbout()
    {
        parent::infoAbout();
        echo "<canvas id=\"myCanvas\" width=\"200\" height=\"100\" style=\"border:2px solid green;\"></canvas>";
        echo '<br>';
        echo "This is"." ".__CLASS__." "."figure.With Sides:"." ".Rectangle::Sides_Count;
    }
}
$rr = new Rectangle(4,6,"green");
$rr->getArea();
$rr->infoAbout();
