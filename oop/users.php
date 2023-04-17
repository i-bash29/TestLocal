<?php

spl_autoload_register(function($name){
    require "$name.class.php";
});

$user1 = new User("Ivan", "ivanb", "1234");
$user2 = new User("Lonya", "lonchik", "5678");
$user3 = new User("Vasya", "vasyok", "9012");
$user = new SuperUser("Admin", "admin", "pass", "admin");

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();
print_r($user->getinfo());


echo User::$count."\n";
echo SuperUser::$count;