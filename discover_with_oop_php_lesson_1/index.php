<?php
class Person {
    protected $name;
    protected $age;
    public function __construct($nameX, $ageX) 
    {
        $this->name=$nameX;
        $this->age=$ageX;
    }

    //геттеры-получить
    public function getAge() {
        return $this->age;
    }

     //сеттеры - установить
    public function setAge($ageX) {   
        $this->age=$ageX;
    }

    //выведет как строку ф-ция туСтринг
    public function toString() {
        return "name:".$this->name."; age: ".$this->age;
    }
}

$user = new Person('Ivan','23');

echo $user->toString();

class Employee extends Person {
    protected $salary;
    public function __construct($nameX, $ageX, $salaryX) {
        parent::__construct($nameX, $ageX);
        $this->salary=$salaryX;
    }
}
$e1 = new Employee("Nik", 23, 500);
//выведет как масив ф-ция принт_р
echo("<pre>");
print_r ($e1);
echo("</pre>");