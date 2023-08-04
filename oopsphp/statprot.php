<?php
class dom
{
    protected static function getwebs()
    {
        return "thiru_odinson.com";
    }


}


class web extends dom
{
    public $webs;
    public function __construct()
    {
        $this->webs = parent::getwebs();
    }
}
$web = new web();
echo $web->webs;

?>