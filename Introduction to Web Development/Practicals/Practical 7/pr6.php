<?php
// Write a script to demonstrate method overriding.

    Class A{
        function display(){
            echo " This is Base";
        }
    }
    Class B extends A{
        function display(){
            echo " This is Over Base";
        }
    }
    $ob = new B();
    $ob->display();
?>
