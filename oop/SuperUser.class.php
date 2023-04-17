<?php

spl_autoload_register(function($name){
    require "$name.class.php";
});

class SuperUser implements ISuperUser
{
    public $role;
    public $name;
    public $login;
    public $password;
    public static $count = 0;
    function __construct($name, $login, $password, $role) {
        $this->role = $role;
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        self::$count++;
    }
    function getInfo() {
        $info ['role'] = $this->role;
        $info ['name'] = $this->name;
        $info ['login'] = $this->login;
        $info ['password'] = $this->password;
        return $info;
    }
}