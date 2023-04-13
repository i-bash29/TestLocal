<?php
class User
{
    public $name;
    public $login;
    public $password;
    public function showInfo() {
        echo "<p>Пользователя зовут ".$this->name."\n";
        echo "<p>Login: $this->login\n";
        echo "<p> Pass: $this->password\n";
        $this->drawLine();
    }
    public function drawLine() {
        echo "<hr>";
    }
}

$user1 = new User();
$user2 = new User();
$user3 = new User();

$user1->name = "Ivan";
$user2->name = "Lonya";
$user3->name = "Lamantin";
$user1->login = "Ivan";
$user2->login = "Lonya";
$user3->login = "Lamantin";
$user1->password = "12345";
$user2->password = "qwerty";
$user3->password = "asdfg";

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();
