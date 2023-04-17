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