<?php
//Прицип открытости - закрытости
//Класс может наследовать от другого и переписывать методы родителя,
//но не может видоизменять входимые и возвращаемые данные и их типы

class Programmer {
    public function sayHello(string $name) : void {
        print "Привет, меня зовут $name!";
    }
}

class WebProgrammer extends Programmer {
    public function sayHello(string $name) : void
    {
        print "Привет, я веб-разработчик и меня зовут $name!";
    }
    //Метод переписан, но не изменены входные данные (string $name) и возвращаемый тип (void)
}