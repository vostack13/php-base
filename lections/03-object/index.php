<?php

namespace SomeNamespace;

echo '<pre>';

/*
 * МОДИФИКАТОРЫ ДОСТУПА
 *
 * public —
 * private —
 * protected —
 */


/* Абстрактные классы и методы
 *
 * от них можно только наследоваться/переопределять
 * НЕЛЬЗЯ создать инстанс от них (экземпляр класса)
 *
 * abstract class Unit
 * {
 * abstract function someFunction();
 * }
*/

/* Финальные классы и методы
 *
 * от них нельза наследоваться/переопределять
 *
 * final class Unit
 * {
 * final function someFunction();
 * }
*/

abstract class Unit
{
    public $health = 10;
    public $name;
    public $position = 0;
    public $speed = 10;

    public function __construct($unitName)
    {
        $this->name = $unitName;
    }

    private function say()
    {
        echo 'I am ' . $this->name;
    }

    public function move()
    {

    }

    public function getInfo()
    {
        echo 'I am ' . $this->name . 'my speed = ' . $this->speed . ' and my position = ' . $this->position;
    }
}

class GroundUnit extends Unit
{
    public function move()
    {
        $this->position = $this->position + $this->speed;
    }
}

class FlyingUnit extends Unit
{
    function __construct($unitName)
    {
        // parent::__construct() нужно, чтобы добавить родительский конструктор в новый конструктор.
        // без этой строки конструктор перепишится
        parent::__construct($unitName);
        $this->speed = $this->speed * 2;
    }

    public function move()
    {
        $this->position = $this->position + $this->speed * 2;
    }
}

$marines = new GroundUnit('Marines');
$stealth = new FlyingUnit('Stealth');

$units = [$marines, $stealth];

foreach ($units as $unit) {

}

//echo 'before move: <br>';
//$marines->getInfo();
//echo '<br>';
//$stealth->getInfo();
//
//$marines->move();
//$stealth->move();
//
//echo '<br>';
//echo '<br>';
//
//echo 'after move: <br>';
//$marines->getInfo();
//echo '<br>';
//$stealth->getInfo();
