<?php
$array1 = [11, 12, 13, 14, 20];
$search = 13;

for ($i = 0; $i < count($array1); $i++) {
    if ($array1[$i] == $search) {
        print("The number is found.");
        print(" The value was: " . $search);
    }
}
?>
