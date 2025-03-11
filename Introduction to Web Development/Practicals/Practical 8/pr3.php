<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $name = $_GET["name"];
    $enrl = $_GET["enrl"];
    echo $name ."<br>". $enrl;
}
?>
