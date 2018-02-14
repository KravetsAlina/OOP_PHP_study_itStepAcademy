<?php

    class CircleCalc {
        
        // Коснтанта класса:
        const PI = 3.1425;
        
        // Static field:
        private static $radius = 0;
        
        // Accessors:
        public static function getRadius() {
            return self::$radius;
        }
        
        public static function setRadius($radius) {
            self::$radius = $radius;
        }
        
        public static function calcSquare() {
            return self::PI * self::$radius * self::$radius;
        }
        
    }
    
    // Test:
    CircleCalc::setRadius(12.35);
    echo("Square of the circle with radius: ");
    echo(CircleCalc::getRadius()." sm -");
    echo("\nis: ".CircleCalc::calcSquare());

?>
