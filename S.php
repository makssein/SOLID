<?php

//Принцип единственной ответственности
//Один класс - одно назначение


class Programmer {
    public function writeCode() {
        print "Я программист, я пишу код";
    }

    public function makeDesign() { //НЕВЕРНО! Делать дизайн - работа дизайнера, программист пишет код
        print "Я создаю дизайн";
    }
}

class Designer {
    public function makeDesign() {
        print "Я создаю дизайн";
    }
}