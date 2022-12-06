<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>title</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
//$day = date("W");
//echo $day." :   is the week number of the year";


$day = date("w");
//echo $day." :   is the day of week";

switch($day){
    case 1:
        echo "<p>It is Monday!</p>";
        break;
    case 2:
            echo "<p>It is Tuesday!</p>";
            break;
    case 3:
            echo "<p>It is Wednesday!</p>";
            break;
    case 4:
            echo "<p>It is Thuursday!</p>";
            break;
    case 5:
             echo "<p>It is Friday!</p>";
            break;
    case 6:
            echo "<p>It is Saturday!</p>";
    case 0:
            echo "<p>It is Sunday!</p>";
            break;
      

}
//$t = date("Y");//year 
//echo $t."<p></p>";

$t = date("r");//time,year,gmt, month
echo $t."<p></p>";
/*
$t = date("h");
echo $t."<p></p>";
*/

?>
</body>
</html>