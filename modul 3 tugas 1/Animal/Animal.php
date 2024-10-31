<?php
namespace Animal;
abstract class Animal {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function makeSound();
    public function getInfo() {
        return "{$this->name} berusia {$this->age} tahun.";
    }
}
?>