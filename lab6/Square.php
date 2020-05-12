<?php
include 'Figure.php';

class Square extends Figure
{
    private $a;
    const Sides_Count = 4;
public function __construct($a,$color)
{
    echo '<div class =Ss>';
    echo $this->a = $a;
    echo '<br>';
    echo "<b>Color:</b>";
    echo $this->color = $color;
    echo "</div>";
}
public function __destruct()
{
}
    public function getArea(){
    $area = $this->a * $this->a;
    echo "<b>Area of square:</b>".$area;
        echo '<br>';
}
final function infoAbout()
{
    parent::infoAbout();
    echo "<canvas id=\"myCanvas\" width=\"200\" height=\"200\" style=\"border: 2px solid rebeccapurple;\"></canvas>";
    echo '<br>';
    echo "This is"." ".__CLASS__." "."figure.With Sides:"." ".Square::Sides_Count;
    echo '</div>';
}
}
$sq  = new Square(12,"rebeccapurple");
$sq->getArea();
$sq->infoAbout();