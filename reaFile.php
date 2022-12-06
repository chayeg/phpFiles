<?php
//1
echo readfile("test.txt");
echo"<br>";
?>

<?php
//2
$myfile=fopen("test.txt","r")or die ("unable to open file");
echo fread($myfile, filesize("test.txt"));
echo"<br>";
fclose($myfile);
?>


<?php
//3
$myfile=fopen("test.txt","r")or die ("unable to open file");
echo fgets($myfile);
echo"<br>";
fgetc($myfile);
?>
<?php
//4
$myfile=fopen("test.txt","r")or die ("not openend");
while(!feof($myfile)){
    echo fgets($myfile);
}
echo"<br>";
?>
<?php
//5
/*
$myfile=fopen("test.txt","w")or die ("unable to open");
$text="I am a Student\n";
fwrite($myfile, $text);
$text="Studing CS";
fwrite($myfile, $text);
fclose($myfile);
*/
?>
<?php
//6
/*
$myfile=fopen("test.txt","a")or die ("unable to open");
$text="I am a Student\n";
fwrite($myfile, $text);
$text="Studing CS";
fwrite($myfile, $text);
fclose($myfile);
*/


?>
<?php
//7


$myfile=fopen("test1.txt","x");
$text="I am a Student\n";
fwrite($myfile, $text);
$text="Studing CS";
fwrite($myfile, $text);
fclose($myfile);

?>




