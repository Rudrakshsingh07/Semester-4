<?php
// Base Class A
class A {
    function display() {
        echo "This is class A. ";
    }
}

// Intermediate Class B (Inherits from A)
class B extends A {
    function show() {
        echo "This is class B. ";
    }
}
// Derived Class C (Inherits from B)
class C extends B {
    function __construct() {
        $this->display(); // Calls method from A
        $this->show();    // Calls method from B
        echo "This is class C.";
    }
}

// Create an object of class C
$o = new C();
?>
