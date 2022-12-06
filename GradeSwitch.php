<?php
$percent=$_POST["percent"];
switch($percent){
  case ($percent>=80):
      echo "Grade: A";
      break;
  case($percent>=70):
          echo  "Grade: B";
          break;   
  case ($percent>=60):
           echo "Grade: C";
           break;
   case ($percent>=50):
          echo "Grade: D";
          break; 
  case ($percent<=40):
          echo "Fail";
          break;

  
}
?>
</body>
</html>