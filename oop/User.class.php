<?php

spl_autoload_register(function($name){
    require "$name.class.php";
});


class User extends UserAbstract
{
    public $name;
    public $login;
    public $password;
    public static $count = 0;

    function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        self::$count++;
    }
    
}