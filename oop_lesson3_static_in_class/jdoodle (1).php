<?php

    class SmartClass {
        
        // Usual field:
        private $number;
        public function getNumber() {
            return $this->number;
        }
        
        // Static field:
        private static $counter = 0;
        public static function getCounter() {
            return self::$counter;
        }
        
        // Smart Constructor:
        public function __construct($number) {
            $this->number = $number;
            self::$counter++;
        }
        
        // Smart Destructor:
        public function __destruct() {
            self::$counter--;
        }
        
    }
    
    // Test:
    $objects = [];
    define("N", 10);
    
    for ($i = 0; $i < N; $i++) {
        $objects[$i] = new SmartClass(1001 + $i);
        echo("Number of object: ".$objects[$i]->getNumber());
        echo("; General amount of objects: ".SmartClass::getCounter());
        echo("\n");
    }

?>
