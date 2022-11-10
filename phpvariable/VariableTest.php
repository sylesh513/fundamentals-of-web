<?php
$x=5;
function mytest(){
    $x=10;
    echo"<p>Variable x inside function is :$x</p>";
}
mytest();
    echo"<p>Variable x outside function is :$x</p>";
    ?>