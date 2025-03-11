<?php
// Parent Class A
class A {
    function display() {
        echo "This is class A. ";
    }
}

// Interface B
interface  B {
    function show();
}

// Class C extends A and implements B
class C extends A implements B {
    function show() {
        echo "This is interface B. ";
    }

    // Constructor to automatically call both methods
    function __construct() {
        $this->display();
        $this->show();
        echo "This is class C.";
    }
}

// Create an object of class C
$o = new C();
?>
