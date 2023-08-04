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
    protected function intro()
    {
        echo "the protected function is called wuth the name of the fruit : {$this->name}";
    }
}

class apple extends fruit
{
    public function m()
    {
        $this->intro();
    }
}


$apple = new apple('red', 'yellow');
$apple->m();
?>