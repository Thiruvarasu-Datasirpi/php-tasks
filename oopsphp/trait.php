<?php
trait message1
{
    public function msg1()
    {


        echo "thiruodinson"."\n";
    }
}
trait message2
{
    public function msg2()
    {


        echo "bheemodinson";
    }
}
class welcome{
    use message1;
}
class welcome1{
    use message1,message2;
}

$greet =new welcome();
$greet->msg1();
$greet =new welcome1();
$greet->msg1();
$greet->msg2();



?>