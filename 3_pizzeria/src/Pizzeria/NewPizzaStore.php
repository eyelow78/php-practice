<?php

namespace Pizzeria;

use PizzaLib\PizzaStore;
use PizzaLib\Pizza;
use Pizzeria\FourCheese;
use Pizzeria\Peperoni;
use Pizzeria\Margarita;

class NewPizzaStore extends PizzaStore
{
    public function createPizza(string $type): ?Pizza
    {
        switch ($type) {
            case 'Пепперони':
                return new Peperoni();
            case 'Четыре сыра':
                return new FourCheese();
            case 'Маргарита':
                return new Margarita();
            default:
                return null;
        }
    }
}