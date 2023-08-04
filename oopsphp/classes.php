<?php 
class fruit{
    public $name;
    public $colour;
    function __construct($name,$colour){
        $this->name = $name;
        $this->colour = $colour;
    }
     function get_name(){
       return $this->name ;
    }

     function get_colour(){
       return $this->colour;
    }
}


$apple = new fruit("apple","red");
$mango=new fruit("mango","yellow");


echo $apple->get_name()."\n";
echo $apple->get_colour()."\n";

echo $mango->get_name()."\n";
echo $mango->get_colour()."\n";


?>