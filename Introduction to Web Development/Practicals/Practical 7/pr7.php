<?php
/*
Write a script to demonstrate method overloading based on the
number of arguments.
*/
Class A{
    public function display(... $a){
        switch (count($a)){
            case 1 :
                echo $a[0]."<br>";
                break;
            case 2 :
                echo $a[0]." And ".$a[1]."<br>";
                break;
            default :
                echo "Just Display"."<br>";
                break;
        }
    }
}

$ob = new A();
$ob->display();
$ob->display(5);
$ob->display(5,6);
?>
