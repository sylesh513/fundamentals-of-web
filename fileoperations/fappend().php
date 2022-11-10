<?php  
$fp = fopen("demo.txt", "a");  
fwrite($fp, " this is additional text\n");  
fclose($fp);  
  
echo "File appended successfully";  
?>