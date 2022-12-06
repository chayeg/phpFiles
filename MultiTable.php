<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Multiplication Table</title>
</head>
<body>
    <table>
    <?php
    

for ($i=1; $i<10; $i++){
    echo "<tr>";
    for($j=1; $j<10; $j++){
    $p=$i*$j;
    echo "<th>$i $p <br></th>";
}
echo "</tr>";
}

?>
</table>
</body>
</html>


