<?php
class fruit
{
    public $name;
    public $colour;
    public function __construct($name, $colour)
    {
        $this->name = $name;
        $this->colour = $colour;
    }

    function intro()
    {
        echo "the name is {$this->name} the colour is {$this->colour}" . "\n";

    }



}
class mangos extends fruit
{
    function display()
    {
        echo "succesfully displayed {$this->name} and {$this->colour}";
    }

}
$mango = new mangos("mango", "yellow");
$mango->intro();
$mango->display();
?>