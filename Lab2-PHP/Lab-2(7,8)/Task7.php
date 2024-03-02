<html>
<head>
    <title>Shapes</title>
</head>
<body>
    <table table border=1 cellspacing=0>
        <tr>
            <td width=200>
<?php
for($i=0;$i<3;$i++){
    for($j=0;$j<=$i;$j++){
      echo "*"; }
      echo "<br>";
}
?>
</td>
<td width=200>
    <?php
for($i=3;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
      echo $j; }
      echo "<br>";
} 
?>
</td>
<td width=200>
    <?php
$k='A';
for($i=0;$i<3;$i++){
    for($j=0;$j<=$i;$j++){
      echo $k++; }
      echo "<br>";
}
?>
</td>
</tr>
    </table>
</body>
</html>
