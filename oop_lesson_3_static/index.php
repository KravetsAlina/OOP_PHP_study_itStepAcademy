<?php

class SquareRectangle{
    //static
    private static $sideOne=0;
    private static $sideTwo=0;
    
    //accessors
    public static function getSideOne(){
        return self::$sideOne;
    }
    public static function setSideOne($sideOne){
        self::$sideOne=$sideOne;
    }
    public static function getSideTwo(){
        return self::$sideTwo;
    }
    public static function setSideTwo($sideTwo){
        self::$sideTwo=$sideTwo;
    }
    //calculator
    public static function calcSquare(){
        return self::$sideOne * self::$sideTwo;
    } 
}
    //Test
    SquareRectangle::setSideOne(12);
    SquareRectangle::setSideTwo(10);
    echo("Square of the rectangle with sides: ");
    echo(SquareRectangle::getSideOne()." sm, and ".SquareRectangle::getSideTwo()." sm ");
    echo("\nis: ".SquareRectangle::calcSquare());

?>


<?php

class SquareTriangle{

    //static
    private static $side=0;
    private static $height=0;

    
    public static function getSide(){
        return self::$side;
    }
    public static function setSide($side){
        self::$side=$side;
    }
   public static function getHeight(){
        return self::$height;
    }
    public static function setHeight($height){
        self::$height=$height;
    }
    
    public static function calcSquare(){
        return 1/2 * self::$side * self::$height;
    } 
        

}
    //Test
    SquareTriangle::setSide(15);
    SquareTriangle::setHeight(8);
    echo("Square of the Triangle with side: ");
    echo(SquareTriangle::getSide()." sm, and height ".SquareTriangle::getHeight()." sm ");
    echo("\nis: ".SquareTriangle::calcSquare());

   
?>

