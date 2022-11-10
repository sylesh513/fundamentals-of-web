<?php
   $file_pointer = fopen("demo.txt", "r");
   echo fread($file_pointer, "10");
   fclose($file_pointer);
?>