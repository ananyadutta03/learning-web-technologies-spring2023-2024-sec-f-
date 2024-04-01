<?php
$value =500;
$vat = $value*0.15;
$price = $value+$vat;

echo "The price of the product is: ".$value."\n";
echo " Total Vat: ".$vat."\n";
echo "Total Amount: ".$price;