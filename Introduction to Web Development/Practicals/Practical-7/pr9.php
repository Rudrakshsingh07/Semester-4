<?php
abstract class AbstractClass {
    abstract public function abstractMethod();
}
class ConcreteClass extends AbstractClass {
    public function abstractMethod() {
        echo "Implemented abstract method\n";
    }
}
$obj = new ConcreteClass();
$obj->abstractMethod();
?>