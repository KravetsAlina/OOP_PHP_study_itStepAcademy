<?php

    abstract class Shape {
        
        const PI = 3.1425;
        
        protected $type;
        protected $number;
        
        public function __construct($type, $number) {
            $this->type = $type;
            $this->number = $number;
        }
        
        public function displayInfo() {
            return $this->type." - ".$this->number;
        }
        
        public abstract function calcS();
        
    }
    
    class Square extends Shape {
        
        private $a;
        
        public function getA() {
            return $this->a;
        }
        
        public function __construct($type, $number, $a) {
            parent::__construct($type, $number);
            $this->a = $a;
        }
        
        public function calcS() {
            return $this->a * $this->a;
        }
        
    }
    
    class Circle extends Shape {
        
        private $R;
        
        public function getR() {
            return $this->R;
        }
        
        public function __construct($type, $number, $R) {
            parent::__construct($type, $number);
            $this->R = $R;
        }
        
        public function calcS() {
            return Shape::PI * $this->R * $this->R;
        }
        
    }
    
    class Rectangle extends Shape {
        
        private $a;
        private $b;
        
        public function getA() {
            return $this->a;
        }
        public function getB() {
            return $this->b;
        }
        
        public function __construct($type, $number, $a, $b) {
            parent::__construct($type, $number);
            $this->a = $a;
            $this->b = $b;
        }
        
        public function calcS() {
            return $this->a * $this->b;
        }
        
    }
    
    class Triangle extends Shape {
        
        private $a;
        private $h;
        
        public function getA() {
            return $this->a;
        }
        public function getH() {
            return $this->h;
        }
        
        public function __construct($type, $number, $a, $h) {
            parent::__construct($type, $number);
            $this->a = $a;
            $this->h = $h;
        }
        
        public function calcS() {
            return 1/2 * $this->a * $this->h;
        }
        
    }
    
    // Test:
    $square1 = new Square("square", 1, 17.5);
    echo($square1->displayInfo()."; a = ".$square1->getA()."; S = ".$square1->calcS()."\n");
    
    $square2 = new Square("square", 2, 27.47);
    echo($square2->displayInfo()."; a = ".$square2->getA()."; S = ".$square2->calcS()."\n");
    
    $circle = new Circle("circle", 3, 12.345);
    echo($circle->displayInfo()."; R = ".$circle->getR()."; S = ".$circle->calcS()."\n");

    $rectangle = new Rectangle("rectangle", 4, 12, 10);
    echo($rectangle->displayInfo()."; a = ".$rectangle->getA()."; b = ".$rectangle->getB()."; S = ".$rectangle->calcS()."\n");
    
    $triangle = new Triangle("triangle", 5, 16, 7);
    echo($triangle->displayInfo()."; a = ".$triangle->getA()."; h = ".$triangle->getH()."; S = ".$triangle->calcS()."\n");
?>