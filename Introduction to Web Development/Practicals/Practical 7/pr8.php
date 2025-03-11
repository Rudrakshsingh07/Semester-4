<?php

    interface A{
        function display();

    }
    Class B implements A{
        function display(){
            echo " This is Base";
        }
    }
    $ob = new B();
    $ob->display();
?>
