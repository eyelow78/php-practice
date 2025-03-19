<?php

require 'vendor/autoload.php';
use Pizzeria\NewPizzaStore;

$pizzastore = new NewPizzaStore();

echo $pizzastore->orderPizza('Пепперони') . PHP_EOL;
echo $pizzastore->orderPizza('Четыре сыра') . PHP_EOL;
echo $pizzastore->orderPizza('Пепперони');