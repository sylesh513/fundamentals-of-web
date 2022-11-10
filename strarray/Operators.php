<?php
  $x = 29;
  $y = 4;
  echo"--Arithmetic Operators--<br/>";
  echo ($x + $y), "<br/>";
  echo($x - $y), "<br/>";
  echo($x * $y), "<br/>";
  echo($x / $y), "<br/>";
  echo($x % $y), "<br/>";
  echo"--Logical or Relational Operators--<br/>";
  if ($x == 29 and $y == 4)
      echo "and <br/>";

  if ($x == 29 or $y == 10)
      echo "or <br/>";

  if ($x == 29 xor $y == 10)
      echo "xor <br/>";

  if ($x == 29 && $y == 4)
      echo "&&  <br/>";
  echo"--Comparison Operators--<br/>";
  if ("29"===(string)29){
  echo"yes<br/>";
  }
  else{
  echo"no<br/>";
  }
  echo"--Assignment Operators--<br/>";
  $y += 4;
  echo $y, "<br/>";
  $y -= 2;
  echo $y, "<br/>";
  echo"--Increment/ Decrement Operators--<br/>";
  echo ++$x,"<br/>";
  echo $y--,"<br/>";
  echo "--Math Function--";
  echo abs(-20), "<br/>";
  echo floor(2.2), "<br/>";
  echo sqrt(2), "<br/>";
  echo dechex(15), "<br/>";
  echo decbin(4), "<br/>";
  echo decoct(10), "<br/>";

?>