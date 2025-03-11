<?php
Class A{
    private $a = 10;
}

Class B extends A{
    function __construct($c){
        $this->a = $c;
    }
    function dis(){
        echo "The Value of A :".$this->a;
    }
}
$ob = new B(5);
$ob->dis();
?>
