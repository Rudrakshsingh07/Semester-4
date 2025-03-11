<?php
// Defining a class with constructor and destructor
class Car {
    public $brand;
    public $model;

    // Constructor
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
        echo "Car object created for {$this->brand} {$this->model}.<br>";
    }

    // Method to display car details
    public function displayCar() {
        echo "Car Brand: {$this->brand}, Model: {$this->model}<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Car object for {$this->brand} {$this->model} is being destroyed.<br>";
    }
}

// Creating an object of the class
$car1 = new Car("Toyota", "Corolla");

// Accessing public properties and methods
$car1->displayCar();
?>
