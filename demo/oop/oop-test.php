<?php
class User
{
    public $name;
    public $login;
    public $password;
    
    function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    function showInfo() {
        echo "<p>Пользователя зовут ".$this->name."\n";
        echo "<p>Login: $this->login\n";
        echo "<p> Pass: $this->password\n";
        $this->drawLine();
    }
    function drawLine() {
        echo "<hr>";
    }
}

class SuperUser extends User
{
    public $role;
    
    function __construct($name, $login, $password, $role) {
        parent::__construct($name, $login, $password);
        $this->role = $role;
    }
    function showInfo() {
        echo "<p>Роль: ".$this->role."\n";
        parent::showInfo();
    }

}

$user1 = new User("Ivan", "ivanb", "1234");
$user2 = new User("Lonya", "lonchik", "5678");
$user3 = new User("Vasya", "vasyok", "9012");
$user = new Superuser("Admin", "admin", "pass", "admin");

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();
$user->showinfo();
