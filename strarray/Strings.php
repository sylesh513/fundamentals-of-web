<?php
$str = "I am Sri sylesh\n";
$strl = strtolower($str);
echo $strl,"<br/>";
$stru = strtoupper($str);
echo $stru,"<br/>";
$str="I'm from woxsen University\n";
$struc = ucfirst ($str);
echo $struc,"<br/>";
$strlc = lcfirst($struc);
echo $strlc,"<br/>";
$strw = ucwords($str);
echo $strw,"<br/>", 
$strr = strrev($str),"<br/>"; 
$strle = strlen($str);
echo $strle;
?>