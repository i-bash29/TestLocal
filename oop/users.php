<?php

abstract class UserAbstract
{
    function showInfo() {
        echo "<p>Пользователя зовут ".$this->name."\n";
        echo "<p>Login: $this->login\n";
        echo "<p> Pass: $this->password\n";
        echo "<hr>";
    }
}

interface ISuperUser
{
    function getInfo();
}

class User extends UserAbstract
{
    public $name;
    public $login;
    public $password;
    
    function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }
    
}

class SuperUser implements ISuperUser
{
    public $role;
    public $name;
    public $login;
    public $password;
    function __construct($name, $login, $password, $role) {
        $this->role = $role;
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }
    function getInfo() {
        $info ['role'] = $this->role;
        $info ['name'] = $this->name;
        $info ['login'] = $this->login;
        $info ['password'] = $this->password;
        return $info;
    }
}

$user1 = new User("Ivan", "ivanb", "1234");
$user2 = new User("Lonya", "lonchik", "5678");
$user3 = new User("Vasya", "vasyok", "9012");
$user = new Superuser("Admin", "admin", "pass", "admin");

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();
print_r($user->getinfo());
