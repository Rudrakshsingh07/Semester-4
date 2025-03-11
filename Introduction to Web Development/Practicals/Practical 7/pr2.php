<?php
class a {
    private $n = 10;

    // Setter method to set value of n
    function set($b) {
        $this->n = $b;
    }

    // Getter method to get the value of n
    function get() {
        echo "Value is: " . $this->n;  // Corrected the issue here
    }
}

// Create an object of class a
$o = new a;

// Set value of n
$o->set(20);

// Get value of n
$o->get();
?>
