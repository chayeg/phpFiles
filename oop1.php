<?php
/////1///
class fruit{
public $name;
public $price;
    //$name;//2 field and 2 method/////four membet
//$price;
    function setName($n, $p){
        $this->name=$n;
        $this->price=$p;
    }

function display(){
    echo"name=$this->name<br>";
   echo"price=$this->price";
}
}
//end of class fruit

$f=new fruit(); //creating an objcet
$f->setName("Banana", 100);
//$apple-> get_data("banana", 200);
$f->display();
?>






<?php

/////2////
class fruits{
    public $name;
    protected $price;
        //$name;//2 field and 2 method/////four membet
    //$price;
        function __construct($n, $p){
            $this->name=$n;
            $this->price=$p;
        }
    
    
   public function display(){
        echo"name=$this->name and price=$this->price";
    }
    //function__distruct(){
      //  echo "name=$this->name and  price=$this->price";
    //}
    //end of class 
}
    $fr=new fruits("Apple", 200);//creating an object
    $fr->display();
?>



<?php

/////3/////
/*
class A{
    public $name;
    public $Price;
    Public $weight;
}
            $a=new A();
            $a->name="Apple";
            $a->Price=300;
            $a->Weight=2.5;
        echo"<br>" .$a->name ." <br> " . $a->Price;
    
    //end of class 
    */
?>


<?php

/////4////
 class A{
   function parentf(){
echo "<br>this from parent class <br> ";
    
    }
}

     class B extends A{
     function childf(){
     echo"<br> this is child class";
         
         }
        }
    class C extends B{
      //  childf();
        function grchild(){
            echo "<br>this is grandchild";
            
        }
    }
$obj=new C();
$obj-> grchild();
$obj-> childf();
$obj->parentf();


?>


