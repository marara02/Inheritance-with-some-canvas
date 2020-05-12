<?php
include 'Figure.php';

class Triangle extends Figure
{
    private $a;
    private $b;
    private $c;
    const Sides_Count = 3;
public function __construct($a,$b,$c,$color)
{
    echo "<b>a:</b>".$this->a = $a;
    echo '<br>';
    echo "<b>b:</b>".$this->b = $b;
    echo '<br>';
    echo "<b>c:</b>".$this->c = $c;
    echo '<br>';
    echo "<b>color:</b>".$this->color = $color;
    echo '<br>';
}
public function getArea(){
    $perimeter = ($this->a + $this->b+$this->c)/2;
    $area = sqrt($perimeter*($perimeter-$this->a)*($perimeter-$this->b)*($perimeter-$this->c));
    echo "Area of triangle:".$area;
    echo '<br>';
}
public function inter(){
    $rr = <<<HHH
    <canvas id="myCanvas" width="400" height="400"></canvas>
<script>
var canvasElement = document.getElementById("myCanvas");
var context = canvasElement.getContext("2d");

context.beginPath();
context.moveTo(80, 80);
context.lineTo(80, 180);
context.lineTo(180, 180);
context.closePath();

context.lineWidth = 8;
context.strokeStyle = '#666666';
context.stroke();

context.fillStyle = "#FFCC00";
context.fill();
</script>
HHH;
    echo $rr;
    echo '<br>';
}
final function infoAbout()
{
    parent::infoAbout();
    echo "This is"." ".__CLASS__." "."figure.With Sides:"." ".Triangle::Sides_Count;
}
}
$tr = new Triangle(4,5,3,"yellow");
$tr->getArea();
$tr->inter();
$tr->infoAbout();