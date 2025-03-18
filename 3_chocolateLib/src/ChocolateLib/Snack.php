<?php

namespace ChocolateLib;

class Snack
{
    public string $name;
    public string $chocolate;
    public array $toppings;

    public function prepare(): void
    {
        echo "\nНачалась создание snack-а '{$this->name}'\n";
        echo "Добавляется шоколад '{$this->chocolate}'\n";
        echo "Добавлены начинок: " . implode(", ", $this->toppings) . "\n";
    }

    public function cut():void
    {
        echo "Данный снек нарезают по вертикали";
    }
}

// class Snickers extends Snack
// {
//     public function __construct()
//     {
//         $this->name = 'Сникерс';
//         $this->chocolate = 'Молочный';
//         $this->toppings = ['нуга', 'карамель', 'арахис'];
//     }
// }

// class Bounty extends Snack
// {
//     public function __construct()
//     {
//         $this->name = 'Баунти';
//         $this->chocolate = 'Молочный';
//         $this->toppings = ['молочный', 'кокосовая стружка'];
//     }
// }

// class Twix extends Snack
// {
//     public function __construct()
//     {
//         $this->name = 'Баунти';
//         $this->chocolate = 'Молочный';
//         $this->toppings = ['молочный', 'кокосовая стружка'];
//     }
// }