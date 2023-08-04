<?php
interface animals
{
    public function makesound();
}

class dog implements animals
{
    public function makesound()
    {
        echo "dog barks" . "\n";
    }
}
class cat implements animals
{
    public function makesound()
    {
        echo "cat meaws" . "\n";
    }
}


$dog = new dog();

$cat = new cat();

$animals=array($dog,$cat);

foreach ($animals as $animal) {
    $animal->makeSound();
}


?>