<?php

//Принцип инверсии зависимостей

interface ProgrammerInterface
{
    public function sayHello(string $name): void;
}

class Programmer implements ProgrammerInterface
{
    public function sayHello(string $name): void
    {
        print "Привет, меня зовут $name!";
    }
}

class WebProgrammer extends Programmer implements ProgrammerInterface
{
    public function sayHello(string $name): void
    {
        print "Привет, я веб-разработчик и меня зовут $name!";
    }
}

class GameProgrammer extends Programmer implements ProgrammerInterface
{
    public function sayHello(string $name): void
    {
        print "Привет, я игровой разработчик и меня зовут $name!";
    }
}

class Boss
{
    public function __construct(public ProgrammerInterface $programmer)
    {
        return $this;
    }

    public function introduce(string $name)
    {
        $this->programmer->sayHello($name);
    }
}

$webProgrammer = new WebProgrammer();
(new Boss($webProgrammer))->introduce("deekep");

$gameProgrammer = new GameProgrammer();
(new Boss($gameProgrammer))->introduce("deekep");

// У класса Boss в конструкторе (или любом другом методе) запрещено указывать класс "нижу по уровню", то есть нельзя
// указать тип WebProgrammer или GameProgrammer, так как при передаче в метод иного класса возникнет ошибка. Нужно
// указывать тип Programmer, так как это родитель остальных классов. Для еще более хорошей реализации необходимо
// указать ProgrammerInterface, чтобы в метод могли быть переданы только классы, имеющие методы, прописанные в
// ProgrammerInterface