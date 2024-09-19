<?php
header('Content-Type: text/plain');

// Person class
class Person {
    public $firstName, $lastName;
    private $age;

    public function __construct($firstName, $lastName, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getFullName() { return "$this->firstName $this->lastName"; }
    public function getAge() { return $this->age; }
    public function setAge($age) { $this->age = $age; }
}

// Car class
class Car {
    public $make, $model;
    protected $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getCarInfo() { return "$this->make $this->model ($this->year)"; }
}

// Create instances
$person = new Person("Jaylo", "Bautista", 19);
$car = new Car("Toyota", "86", 2012);

// Display output
echo "Full Name: " . $person->getFullName() . "\n";
echo "Age: " . $person->getAge() . "\n";
$person->setAge(19);
echo "Updated Age: " . $person->getAge() . "\n";
echo "Car Info: " . $car->getCarInfo() . "\n";
?>
