<?php  
class funs{
    public static function welcome(){
        echo "static keyword printed";
    }
}
class st{
    public function message(){
        funs::welcome();

}
}
$st =new st();
$st->message();
?>