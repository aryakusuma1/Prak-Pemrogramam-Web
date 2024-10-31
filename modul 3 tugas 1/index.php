<?php
spl_autoload_register(function ($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require_once __DIR__ . '/' . $class . '.php';
});

use Animal\Dog;

$dog = new Dog("nami", 1);
echo $dog->getInfo();
echo $dog->makeSound();
echo $dog->run();
?>