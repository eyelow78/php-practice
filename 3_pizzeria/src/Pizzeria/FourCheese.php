<?php

namespace Pizzeria;

use PizzaLib\Pizza;

class FourCheese extends Pizza
{
    public function __construct()
    {
        $this->name = 'Четыре Сыра';
        $this->sauce = 'Сырный';
        $this->toppings = ['Моцарелла', 'Пармезан', 'Эмменталь', 'Горгонзолу'];
    }
}