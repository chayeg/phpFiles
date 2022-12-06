<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Fibonacci Series</title>
</head>
<body>
    <?php
        echo "In For loop\n";

    $p=0; //echo"$p,";
    $c=1; //echo"$c,";

   for ($i=0; $i<11; $i++){
       $n=$p+$c;
       $p=$c;
       $c=$n;
       echo "$p,\n";
       
   }
   ?>
   <br><br>
   <?php
    echo "In while loop\n";
$p=0; //echo"$p,";
    $c=1; //echo"$c,";
    $i=0;
    while($i<11)
    {
        $n=$p+$c;
        $p=$c;
        $c=$n;
        echo "$p,\n";
        $i++;   
    }

?>
    </body>
    </html>
    