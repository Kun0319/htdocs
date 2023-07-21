<?php
define('LETTERS', 'ABCDEFGHIJKLMNOPQRSTUVXWZIO');
function checkTWID($id)
{
    $ret = false;
    if (preg_match('/^[A-Z][12][0-9]{8}$/', $id)) {

        $c1 = substr($id, 0, 1);
        $a12 = strpos(LETTERS, $c1) + 10;
        $a1 = (int) ($a12 / 10);
        $a2 = $a12 % 10;
        $n1 = substr($id, 1, 1);
        $n2 = substr($id, 2, 1);
        $n3 = substr($id, 3, 1);
        $n4 = substr($id, 4, 1);
        $n5 = substr($id, 5, 1);
        $n6 = substr($id, 6, 1);
        $n7 = substr($id, 7, 1);
        $n8 = substr($id, 8, 1);
        $n9 = substr($id, 9, 1);
        $sum = $a1 * 1 + $a2 * 9 + $n1 * 8 + $n2 * 7 + $n3 * 6 + $n4 * 5 +
            $n5 * 4 + $n6 * 3 + $n7 * 2 + $n8 * 1 + $n9 * 1;
        $ret = $sum % 10 == 0;

    }
    return $ret;
}


class Bike
{
    protected $speed;


    function __construct()
    {
        $this->speed = 0;
    }


    function upSpeed()
    {
        $this->speed = $this->speed < 1 ? 1 : $this->speed * 1.2;

    }
    function downSpeed()
    {
        $this->speed = $this->speed < 1 ? 0 : $this->speed * 0.5;
    }
    function getSpeed()
    {
        return $this->speed;


    }
}
class Scooter extends Bike
{

    private $gear;


    function __construct()
    {
        parent::__construct();
        echo "Scooter <br>";


    }
    function upSpeed()
    {
        if ($this->gear > 0) {
            $this->speed = $this->speed < 1 ? 1 : $this->speed * 1.4 * $this->gear;
        }
    }

    function changeGear($gear = 0)
    {
        if ($gear >= 0 && $gear <= 4) {
            $this->gear = $gear;
        }
    }
}



class Member
{
    private $id, $account, $realname;

    public function __construct($id, $account, $realname)
    {
        $this->id = $id;
        $this->account = $account;
        $this->realname = $realname;
    }
    public function __get($id)
    {
        return $this->id;

    }
    public function getId()
    {
        return $this->id;
    }
}
?>