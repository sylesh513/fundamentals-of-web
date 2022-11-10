<?php
$branch = array("AI", "CSE", "AR");
echo " Branches in Woxsen are:  $branch[0], $branch[1], $branch[2]";
echo "<br/>";
$age = array ("Peter" => "35", "Ben" => "37", "Joe" => "43");
print_r (array_change_key_case ($age, CASE_UPPER ));
echo "<br/>";
print_r(array_change_key_case($age, CASE_LOWER));
echo "<br/>";
print_r(array_chunk ($branch, 2));
echo "<br/>";
echo count ($branch);
echo "<br/>";
print_r (array_reverse ($age));
echo "<br/>";
echo array_search ("Ben",$age);
$branchl = array ("AL","AR", "BIC");
$result = array_intersect ($branch, $branchl);
print_r($result);
?>