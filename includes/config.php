<?php
//mysqli object oriented
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="loginSystem";
//echo"succesful"
?>

<?php
/*
$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$conn =new mysqli($dbServername, $dbUsername, $dbPassword);
//check connection
if($conn->connect_error)
die("connection failed".$conn->connect_error);
echo"succesful";
?>
<?php
//mysqli-procedural
$conn=mysqli_connect($dbServername,$dbUsername, $dbPassword);
if(!$conn)
die("fail".mysqli_connect_error());
echo"Success!";
?>
<?php
//PDO php data object
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="loginSystem";
try{
    $conn=new PDO("mysqli:host=$dbServername;localhost; $dbName=mydb", $dbUsername, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"Succesful";
}
catch(PDOException $e)
{
    echo"failed".$e->getMessage;
}
$conn=null;


//it takes the most recent value
$x=100;
$x=70;
$x=80;
echo"$x";
echo"<br>";
//increment and decrement 
$x=20;
echo $x++;
echo"<br>";
echo $x;//it will display 21 the moment x is called
echo"<br>";
echo $x;
echo"<br>";
///while loop 
$i= 0;
$num= 50;
while( $i< 10)
{
$num--;
$i++;
}
echo ("Loop stopped at i= $i and num= $num" );
echo"<br>";

//////do while loop
$i= 0;
$num= 0;
do
{
$i++;
}while( $i< 10 );
echo ("Loop stopped at i= $i" );
//for each
echo"<br>";

$a = array( 1, 2, 3, 4, 5);
foreach( $a as $v )
{
echo "Value is $v <br/>";
}

$z=array("a","b", "c");
foreach($z as $loopdata){
    echo"$loopdata";

}
echo" <br/>";
//array

$val=[1,2,3,4,5,6];
echo count($val);
echo" <br/>";
//Associative or hash arrays..they are same with numeric arrays but they are different in index
//we don't keep associative array in a double quote

$x=5;
echo'$x=6'.$x;
echo" <br/>";
echo "$x=6".$x;
echo" <br/>";
//displaying of elements from a desctiptive way 
$ppl=array('abel'=>'male', 'seti'=>'female');
//print_r($ppl);
echo"Abel is a ".$ppl['abel'];
////salary example
echo" <br/>";
$salary=array('meti'=>2000,'heni'=>444,'seti'=>555,'bami'=>5553);
echo "salary of meti is ".$salary["meti"];
echo" <br/>";
$marks = array(
    "mohammad" => array( "physics" => 35, "maths" => 30,"chemistry" => 39),
    "qadir" => array("physics" => 30,"maths" => 32,"chemistry" => 29 ),
    "zara" => array("physics" => 31,"maths" => 22,"chemistry" => 39)
);
print_r($marks);

echo" <br/>";
$movie=array("comedy"=>array("pink panter","Jonny English"),
"epic"=>array("lords of the erings"),"action"=>array("expendibles", "dies hard")
);
echo" <br/>";
$variable = "name";
$literally = 'My $variable will not print!\\n';
print($literally);
$literally = "My $variable will print!\\n";
print($literally);
echo"<br/>";
class Fruit { 
    public $name; 
    public $color;
     function __construct($name) 
     { $this->name = $name; 
    } 
function __destruct() 
{ echo "The fruit is {$this->name}.";
 } } $apple = new Fruit("Apple");

*/



?>





