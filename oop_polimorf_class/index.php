<?php
echo("Полиморфное наследование классов");
// ++++++++++++
// Parent class
// ++++++++++++

class Weapon{

protected $name;
protected $power;
protected $distancer;

public function __construct($p1, $p2, $p3){
$this->name = $p1;
$this->power = $p2;
$this->distance = $p3;
}

public function toString(){
$str = "";
$str .= "/n Weapon Params: /n";
$str .= "1. name: ".this->name."/n";
$str .= "2. power: ".this->power."/n";
$str .= "3. distance: ".this->distance."/n";
return $str;
}

public function shoot(){
return "Shor Effect: ";

}

}

// Child class

class Shotgun extends Weapon {

public function __construct($p1, $p2, $p3){
parent::__construct($p1, $p2, $p3);
}

public function shoot(){
return parent::shoot(). "bah-bah";

}

}
class BigGun extends Weapon {

public function __construct($p1, $p2, $p3){
parent::__construct($p1, $p2, $p3);
}

public function shoot(){
return parent::shoot(). "tish-tish";

}

}

class VipGun extends Weapon {

public function __construct($p1, $p2, $p3){
parent::__construct($p1, $p2, $p3);
}

public function shoot(){
return parent::shoot(). "BUM";

}

}

$weapons = array(
new Shotgun ("MG1",50,150);
new BigGun ("MG2",80,1500);
new VipGun ("MG3",99,2700);
);

$i = 2;
$weapons[i]->shoot();


//+++++++++\\
//Test Zone\\
//+++++++++\\
$m14 = new Weapon("M-14 Shotgan", 400, 40);
$akm = new Weapon("AKM Gun", 80, 1000);
$ar15 = new Weapon("AR15 Gun", 35, 150);
$arr = [$m16, akm, ar15];
for ($1 = 0; $i < 3; i++){
echo($arr[$i]->toString());
}
?>