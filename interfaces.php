<?php

interface type_of_figure{

 public function getSideA();
 public function getSideB();
 public function getSideC();
 public function getSideD();

 public function setSideA($side_a);
 public function setSideB($side_b);
 public function setSideC($side_c);
 public function setSideD($side_d);

 public function __construct($side_a = 0, $side_b = 0, $side_c = 0, $side_d = 0);
 public function getPerimeter();
 public function getArea();
}

trait return_parameters{

 public function return_type(square $square){
  echo "This is a ".$square->figure_type."<br>";
  echo "Perimeter of ".$square->figure_type." is equal ".$square->getPerimeter()."<br>";
  echo "Area of ".$square->figure_type." is equal ".$square->getArea()."<br>";
 }
 /*public function return_perimeter_area(){
  echo "Perimeter of ".$this->figure_type." is equal ".$this->getPerimeter()."<br>";
  echo "Area of ".$this->figure_type." is equal ".$this->getArea()."<br>";
 }*/
}
//квадрат

class square implements type_of_figure{

 protected $side_a;
 protected $side_b;
 protected $side_c;
 protected $side_d;

 public $figure_type = 'Square';

 /**
  * @return int
  */
 public function getSideA()
 {
  return $this->side_a;
 }

 /**
  * @return int
  */
 public function getSideB()
 {
  return $this->side_b;
 }

 /**
  * @return int
  */
 public function getSideC()
 {
  return $this->side_c;
 }

 /**
  * @return int
  */
 public function getSideD()
 {
  return $this->side_d;
 }

 /**
  * @param int $side_a
  */
 public function setSideA($side_a)
 {
  $this->side_a = $side_a;
 }

 /**
  * @param int $side_b
  */
 public function setSideB($side_b)
 {
  $this->side_b = $side_b;
 }

 /**
  * @param int $side_c
  */
 public function setSideC($side_c)
 {
  $this->side_c = $side_c;
 }

 /**
  * @param int $side_d
  */
 public function setSideD($side_d)
 {
  $this->side_d = $side_d;
 }

  public function __construct($side_a = 5, $side_b = 5, $side_c = 5,$side_d = 5){

   $this->side_a = $side_a;
   $this->side_b = $side_b;
   $this->side_c = $side_c;
   $this->side_d = $side_d;

 }

 public function getPerimeter(){
   $perimeter = 4*($this->side_a);
   return $perimeter;
   //echo "<br>";
 }

 public function getArea(){
  $area = ($this->side_a)*($this->side_a);
  return $area;
  //echo "<br>";
 }
 use return_parameters;
}

//прямокутник

class rectangle extends square{

 public $figure_type = 'Rectangle';

 public function getPerimeter(){
  $perimeter = 2*($this->side_a) + 2*($this->side_b);
  return $perimeter;
  //echo "<br>";
 }

 public function getArea(){
  $area = ($this->side_a)*($this->side_b);
  return $area;
  //echo "<br>";
 }
 use return_parameters;
}

//ромб

class rhombus extends rectangle{

 public $figure_type = 'Rhombus';

  public function getPerimeter(){
  //print("<br>");
  $perimeter = 2*($this->side_a) + 2*($this->side_b);
  return $perimeter;
  //echo "<br>";
 }

 public function getArea(){
  $area = ($this->side_a*$this->side_b)/2;
  return $area;
  //echo "<br>";
 }
 use return_parameters;
}

$square = new square(5,5);
$square->return_type($square);
echo("<br>");

$rectangle = new rectangle(4,8);
$rectangle->return_type($rectangle);
echo("<br>");

$rhombus = new rhombus(12,14);
$rhombus->return_type($rhombus);
echo("<br>");












