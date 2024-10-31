<?php
namespace Animal;

use Traits\CanRun;

class Dog extends Animal {
    use CanRun;

    public function makeSound() {
        return " Gukgukguk";
    }
}
?>