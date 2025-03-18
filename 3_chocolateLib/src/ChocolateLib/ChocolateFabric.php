<?php

namespace ChocolateLib;

// use ChocolateFabric\Snack;

class ChocolateFabric
{
    public function orderSnack(string $type):void
    {
        $snack = $this->createSnack($type);
        if ($snack) {
            $snack->prepare();
            $snack->cut();
        } else {
            echo "Такого снека нет в меню: {$type}\n";
        }
    }

    public function createSnack(string $type): ?Snack
    {
        throw new \Exception("Данный метод невозможно использовать в родительском классе");
    }
}


// class NewChocolateFabric extends ChocolateFabric
// {
//     public function createSnack(string $type)
//     {
//         switch ($type) {
//             case "Сникерс":
//                 return new Snickers();
//             case "Баунти":
//                 return new Bounty();
//             case "Твикс":
//                 return new Twix();
//             default:
//                 echo 'не существует такого снека';
//         }
// }
// }
