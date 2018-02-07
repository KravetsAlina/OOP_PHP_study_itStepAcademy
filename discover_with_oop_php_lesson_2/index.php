<?php
   
  class Animal {
    protected $age;
    protected $name;
    protected $action;
    protected $legs;
    protected $food;
     
    public function __construct($age, $name, $action, $legs, $food) {
      $this->age = $age;
      $this->name = $name;
      $this->action = $action;
      $this->legs = $legs;
      $this->food = $food;
    }
 
      public function toString() {
        return "age: ".$this->age."; 
                name: ".$this->name."; 
                action: ".$this->action."; 
                legs: ".$this->legs."; 
                food: ".$this->food.";";

      }
  }

    $dog = new Animal(5, "Black Jack", "run", 4,"bone");  
    echo ("Class Animal and Object Dog <br>");
    echo $dog->toString();
    echo ("<br><br>");

  class Fish extends Animal {
    protected $place;
    protected $puddle;

    public function __construct($age, $name, $action, $legs, $food, $place, $puddle) {
        parent::__construct($age, $name, $action, $legs, $food);
        $this->place=$place;
        $this->puddle=$puddle;
    }

    public function toString() {
        return "age: ".$this->age."; 
        name: ".$this->name."; 
        action: ".$this->action.";  
        legs: ".$this->legs.";
        food: ".$this->food."; 
        place: ".$this->place."; 
        puddle: ".$this->puddle.";";
    }
  }

    $fish = new Fish(1, "Filbert", "swim", 0, "worm", "ocean", 7);  
    echo ("Class Fish and Object Fish <br>");
    echo $fish->toString();
    echo ("<br><br>");
  


  class Bird extends Animal {
    protected $sing;
    protected $house;
    protected $wings;

    public function __construct($age, $name, $action, $legs, $food, $sing, $house, $wings) {
        parent::__construct($age, $name, $action, $legs, $food);
        $this->sing=$sing;
        $this->house=$house;
        $this->wings=$wings;
    }

    public function toString() {
        return "age: ".$this->age."; 
        name: ".$this->name."; 
        action: ".$this->action."; 
        legs: ".$this->legs."; 
        food: ".$this->food."; 
        sing: ".$this->sing.";
        house: ".$this->house."; 
        wings: ".$this->wings.";" ;
    }
  }

    $bird = new Bird(2, "Kwiki", "fly", 2, "cereal", "la-la-la", "forest", 2);  
    echo ("Class Bird and Object Bird <br>");
    echo $bird->toString();
    echo ("<br><br>");