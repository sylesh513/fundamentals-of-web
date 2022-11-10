
<?php
$myfile = fopen("demo.txt", "w");
echo fputs($myfile, "Woxsen\n");
fclose($myfile);
?>