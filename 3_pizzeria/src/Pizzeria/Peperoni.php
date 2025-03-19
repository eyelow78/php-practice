<?php

namespace Pizzeria;

use PizzaLib\Pizza;

class Peperoni extends Pizza
{
    public function __construct()
    {
        $this->name = 'Пепперони';
        $this->sauce = 'Томатный соус';
        $this->toppings = ['Пеперони', 'Моцарелла', 'Чеддер'];
    }
}