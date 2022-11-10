<?php
$file = fopen("demo.txt","r");
echo fgets($file,"15");
fclose($file);
?>