<?php
$percent=$_POST['percent'];

if($percent>=80)
{
    echo "Your grade is: A";
}
elseif($percent>=70)
{
    echo "Your grade is: B";
}
elseif($percent>=60)
{
    echo "Your grade is: C";
}
elseif($percent>=40)
{
    echo "Your grade is: D";
}

else{
    echo "Fail!";
}


?>
</body>
</html>