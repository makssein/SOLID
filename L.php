<?php
//Принцип подстановки Барбары Лисков
//Наследники должны корректно создавать методы, для этого используются интерфейсы

interface ProgrammerInterface {
    public function sayHello(string $name) : void;
}

class Programmer implements ProgrammerInterface {
    public function sayHello(string $name): void
    {
        print "Привет, меня зовут $name!";
    }
}

class WebProgrammer extends Programmer implements ProgrammerInterface {
    public function sayHello(string $name): void
    {
        print "Привет, я веб-разработчик и меня зовут $name!";
    }
}

class GameProgrammer extends Programmer implements ProgrammerInterface {
    public function sayHello(string $name): void
    {
        print "Привет, я игровой разработчик и меня зовут $name!";
    }
}

class Boss {
    public function __construct(public Programmer $programmer)
    {
        return $this;
    }

    public function introduce(string $name) {
        $this->programmer->sayHello($name);
    }
}

$webProgrammer = new WebProgrammer();
(new Boss($webProgrammer))->introduce("deekep");

$gameProgrammer = new GameProgrammer();
(new Boss($gameProgrammer))->introduce("deekep");

//При передаче любого программиста классу Boss они корректно выведут свою строку, так как в каждом классе метод sayHello
//реализован по одинаковому принципу