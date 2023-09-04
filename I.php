<?php
//Принцип разделения интерфейса.
//Каждый интерфейс должен содержать только методы, которые могут быть у класса все одновременно (да, странное объяснение)

interface ProgrammerInterface {
    public function writeCode() : void;
}

interface PeopleInterface {
    public function eat() : void;
}

class Programmer implements ProgrammerInterface, PeopleInterface {
    public function writeCode(): void
    {
       print "Я человек, я пишу код!";
    }

    public function eat(): void
    {
        print "Я человек, я кушаю!";
    }
}

class ArtificialIntelligence implements ProgrammerInterface {
    public function writeCode(): void
    {
        print "Я ИИ, я пишу код!";
    }
}

//нельзя объединить два интерфейса, так как для класса ArtificialIntelligence интерфейс PeopleInterface не нужен и ему
//нет необходимости определять метод eat