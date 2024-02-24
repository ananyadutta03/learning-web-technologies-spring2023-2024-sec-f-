<?php
$n1 = 10;
$n2 = 20;
$n3 = 30;

if ($n1 >= $n2 && $n1 >= $n3) {
    echo "The largest number is: $n1\n";
} elseif ($n2 >= $n1 && $n2 >= $n3) {
    echo "The largest number is: $n2\n";
} else {
    echo "The largest number is: $n3\n";
}
?>