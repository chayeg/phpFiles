<?php
class par{
    public $name;
    public $color;
    public function __construct($n,$c){
        $this->name=$n;
        $this->color=$c;

    }
    public function display(){
        echo"the fruit is {this->name} and the color is{this->color}";
    }
}
class ch extends par{
    public $weight;
    public function __construct($n,$c,$w){
        $this->name=$n;
        $this->color=$c;
        $this->weight=$w;
    }
    public function display(){
        echo"name={$this->name}
             color={$this->color}";

    }
}
$obj=new ch("Apple","red",500);
$obj->display();
echo"<br>";
?>

<?php
abstract class Abc{
    public $name;
    abstract public function display();
    public function __construct($n){
        $this->name=$n;}

    }
    class A extends Abc{
        public function display(){
            echo"this {$this->name} is from class A";

        }
    }
    
    class B extends Abc{
        public function display()
        {
            echo"from class B{$this->name}";}
        }
        class C extends Abc {
            public function display(){
                echo"this is from C";
            }
        }
        $a=new A("banana");
        $a->display();
        echo"<br>";
        $b=new B("Apple");
        $b->display();
        echo"<br>";
        $c=new C("mango");
        $c->display();
        ?>
        <?php
        interface inter{
            public function sound();

        }
        class cat implements inter{
            public function sound(){
                echo"cat sound";

            }
        }
        class dog implements inter{
            public function sound(){
                echo"dog sound";

            }

        } 
        echo"<br>";
        $c=new cat();
        $c->sound();
        echo"<br>";
        $d=new dog();
        $d->sound();
    
    
        ?>
        <?php
        trait tr1{
            public function m1(){
                echo"this is m1";
            }
        }
        trait tr2{
            public function m2(){
                echo"this is m2";
            }
        }
        trait tr3{
            public function m3(){
                echo"this is m3";
            }
        }
        class c1{
            use tr1;
             use tr2;
             use tr3;
             public function m4(){
                echo "this is m4";
             }
        }
        class c2{
            use tr2, tr3;
            public function m5(){
                echo "This is m5";

            }
        }
        $obj1= new c1();
        $obj1->m1();
        $obj1->m2();
        $obj1->m3();
        $obj1->m4();
        $obj2= new c2();
        $obj2->m2();
        $obj2->m3();
        $obj2->m5();
    
        ?>
