<?php
	echo "Create a PHP program that has an associative array with names and grades stored in alphabetical order. Display the value of that array sorted starting from the highest grade to the lowest. You may use any sorting algorithm that you want.<br>";
$Names = array("94.5" => "Ana", "90" => "Nico", "86" => "Zed", "89.9" => "Mary");
asort($Names);
foreach ($Names as $key => $val) {
    echo "<br> $key = $val <br>";
}
?>