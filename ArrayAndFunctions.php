<!DOCTYPE html>
<html>
    <head>
        <title>PracticeOnA</title>
    </head>
        <body>
            <form method="GET">
                <input type="hidden" name="name" value="chaye">
                <button type="submit">PRESS ME</button>
            </form>
            <?php
 ////array           
  // $array=array("Dani", "seti", "gigi", "bani", "fuye");
    //  echo $array[0];



///////creating a function
 
/*$x=100;// we can change its position
function newCalc($x){
    $newnr=$x*0.75;
    echo"here it is: ".$newnr;
}
//$x=100; we can do this too 
newCalc($x);
echo "<br>";
$a=10;
newCalc($a);


//////////Global and local functions
$x=1;//this is a global variable which is outside the function 

function something(){
    $y=5;//is a local variable which is inside a function we can only use it only inside
}
echo $x;
//echo $y; //it wont print out Y b/c itsn't a global varible
     



////////superGLOBALS
$x=8;
function something(){
    $R=9;
    echo $GLOBALS['x'];//we use GLOBALS for special cases..instead of using it inside the();

}
something();
       
     
////POST and GET methods
//echo $_POST['name'];//it will post out chaye into the URL and no info will be in there.
$name ="";
echo $_GET['name'] ?? "";  //name=chaye will be in the URL and it will also be printed


/////COOKIE AND SESSION
setcookie("name", "chaye", time() - 86400);// + after a day it automatically distroys it self\
//- it will distroy cookie
//cookies are not safe

$_SESSION['name']="chaye";//id is chaye
///////////////////function passed by value and reference
function display(&$x, &$y)//refeerence
$x,$y//by value

 */
8


       ?> 

        </body>
            </html>