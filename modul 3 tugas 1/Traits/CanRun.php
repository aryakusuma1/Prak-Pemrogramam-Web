<?php
namespace Traits;

trait CanRun {
    public function run() {
        return " {$this->name} is running!";
    }
}
?>