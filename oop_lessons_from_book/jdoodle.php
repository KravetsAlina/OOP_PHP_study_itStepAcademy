<?php
class Worker {
    public $name;
    public $age;
    public $salary;
}

$worker1 = new Worker;
$worker1->name = 'Ivan';
$worker1->age = '25';
echo $worker1->name;
echo $worker1->age;

$worker2 = new Worker;
$worker2->name = 'Vasya';
$worker2->age = '20';
echo $worker2->name;
echo $worker2->age;


echo $worker1->age + $worker2->age;
?>
<br>

<?php
class Employee {
    private $name;
    private $age;
    private $salary;

    public function getAge() {
        return $this->age;
    }
    
    public function setAge($age) {
		if ($this->checkAge($age)) {
			$this->age = $age;
		}
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    private function checkAge($age) {
        if($age<100) {
            return "Yes";
        } else {
            echo "No!";
        }
    }
}

$employee1 = new Employee;
$employee1->setAge(25);
$employee1->setName('Ivan');
echo $employee1->getAge();

$employee2= new Employee;
$employee2->setAge(20);
$employee2->setName('Vasya');
echo $employee2->getName();

echo $employee1->getAge()+$employee2->getAge();
?>
<br>

<?php
class Smb {
    private $name;
    private $salary;
    private $age;
    
    public function __construct($name, $salary, $age) {
        $this->name = $name;
        $this->salary = $salary;
        $this->age = $age;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getSalary() {
        return $this->salary;
    }
    
    public function getAge() {
        return $this->age;
    }
}

$dima = new Smb('Dima', 1000, 25);
echo $dima->getName();
echo $dima->getSalary();
echo $dima->getAge();
?>
<br>

<?php
class User {
   protected $name;
   protected $age;
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name=$name;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function setAge($age) {
       $this->age=$age; 
    }
}

class Worker1 extends User {
    private $salary;
    
    public function getSalary() {
        return $this->salary;
    }
    
    public function setSalary($salary) {
        $this->salary = $salary;
    }
}
    $ivan = new Worker1;
    $ivan->setName('Ivan');
    $ivan->setSalary(1000);
    $vasya = new Worker1;
    $vasya->setName('Vasya');
    $vasya->setSalary(2000);
    
    echo $vasya->getSalary()+$ivan->getSalary();
    echo "<br>";
    
class Student extends User {
    private $stipend;
    private $kurs;
    
    public function getStipend() {
        return $this->stipend;
    }
    
    public function setStipend($stipend) {
        $this->stipend = $stipend;
    }
    
        public function getKurs() {
        return $this->kurs;
    }
    
    public function setKurs($kurs) {
        $this->kurs = $kurs;
    }
}

$student = new Student;
$student->setStipend(600);
$student->setKurs("ABC");
$student->setName("Vitya");
$student->setAge(18);

echo $student->getStipend();
echo $student->getKurs();
echo $student->getName();
echo $student->getAge();
?>