<?php
//1
function sum($a,$b=20,$c=8) {
    $sum=$a+$b+$c;
    return $sum;
}
echo "Sum=".sum(3,4,5);
echo "<br>";
//2
function swap($n, $m) {
    echo "Initial Values X=".$n." Y=".$m. "<br>";
    $k=$n;
    $n=$m;
    $m=$k;
    echo "Final Values X=".$n." Y=".$m."<br>";
}
swap(4,5);
//3
echo "Sum=".sum(6, 7, 10). "<br>";
echo "Sum=".sum(3). "<br>";
//4
counts();
counts();
counts();
function counts() {
    static $x=0;
    echo $x. "<br>";
    $x++;
}
//5
function addArray(){
    $netSalary=[7000,6000,8500];
    $totalCost= array_sum($netSalary);
    echo $totalCost;
}
//addArray();
//6
$stud=array(
    array("Name"=>"Abel", 'Age'=>20,'Gender'=>'M'),
    array("Name"=>"Nathan", 'Age'=>21,'Gender'=>'M')

);
for ($i=0; $i<sizeof($stud); $i++){
    foreach ($stud[$i] as $key=> $value){
        echo "$key => $value <br>";
    }
}
?>