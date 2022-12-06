<?php //mysqli object oriented
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="mydb";
//echo"succesful"

try{
    $conn =new PDO("mysql:host=$dbServername;dbname=mydb",$dbUsername, $dbPassword);
    $conn->setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo"Connected Successfully";
   // $abc="Create database mydb";
    //$conn->exec($abc);
    //echo"db created Successfully";
    $tbl="create table Course(CCode Varchar(12) primary Key,Ctitle Varchar(30), Chr int(2))";

$ins="INSERT INTO Course(CCode,Ctitle,Chr) VALUES('03', 'Net',4)";
//$sel="SELECT * FROM `course` WHERE 1";
//$del="DELETE FROM `Course` ";

$conn->exec($sel);


echo"Selected  Succesfully ";
}
catch(PDOException $pe){
    echo"Connection failed".$pe->getMessage();
    $conn=null;
}
?>



