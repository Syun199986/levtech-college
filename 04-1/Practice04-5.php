<?php
class Animal {
    public $cry = "bowbow!";
    
    public function bow() {
        echo $this->cry . PHP_EOL;
    }
}

$animal = new Animal();
$animal->bow() . PHP_EOL;

class Dog extends Animal {
    public $cry = "bowbowbow";
}

class Cat extends Animal {
    public $cry = "meow";
}

$animal = new Dog();
$animal->bow() . PHP_EOL;

$animal = new Cat();
$animal->bow() . PHP_EOL;
