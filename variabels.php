<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Title of the doc
        </title>
</head>
<body bgcolor=grey>
    <form method="GET">
        <input type="text" name="person">
            <button>SUBMIT</button>
</form>

<?php
/*echo "hello thereeeeee\r";
print "danii \r\n";
print 15;
echo 10+5;*/
$name= $_GET['person'];//we use action to transfer or when theres connection b/n another file
//that gets result from input
echo $name. " is a good person";
//we use "." to concatenate in php cade and string.

?>
</body>

</html>