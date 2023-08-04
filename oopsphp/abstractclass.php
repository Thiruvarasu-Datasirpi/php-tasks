<?php
abstract class car{
    public $name;
    public $speed;

    public function __construct($name,$speed){
        $this->name=$name;
        $this->speed=$speed;
    }
abstract public function intro();
}

class volvo extends car{
    function intro(){
        echo "i am volvo and my colour is {$this->name} and the speed is {$this->speed}"."\n";
    }

}
class audi extends car{
    function intro(){
        echo "the name is audi and my colour is  {$this->name} and the speed is {$this->speed}"."\n";
    }

}
class bmw extends car{
    function intro(){
        echo "the name is bmw and my colour is  {$this->name} and the speed is {$this->speed}"."\n";
    }

}
$volvo = new volvo('red', 750);
$volvo->intro();
$audi = new audi('white', 500);
$audi->intro();

$bmw = new bmw('blue', 1000);
$bmw->intro();



?>