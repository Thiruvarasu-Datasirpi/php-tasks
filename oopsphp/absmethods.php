<?php
abstract class human
{
    abstract protected function intro($name);


}
class gender extends human
{
    public function intro($name)
    {
        if ($name == "thiru") {
            $prefix = "Mr";
            echo "{$prefix}:{$name}" . "\n";
        } elseif ($name == "indhu") {
            $prefix = "Mrs";
            echo "{$prefix}:{$name}" . "\n";
        }



    }


}



$male = new gender();
$male->intro("thiru");
$male->intro("indhu");


?>