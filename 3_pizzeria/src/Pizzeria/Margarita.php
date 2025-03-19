<?php

namespace Pizzeria;

use PizzaLib\Pizza;

class Margarita extends Pizza
{
    public function __construct()
    {
        $this->name = 'Маргарита';
        $this->sauce = 'Томатный соус';
        $this->toppings = ['Моцарелла', 'Помидоры'];
    }
}