<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $enrl = $_POST["enrl"];
    echo $name ."<br>". $enrl;
}
?>
