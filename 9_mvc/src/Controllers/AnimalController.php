<?php

namespace App\Controllers;

use App\Models\Animal;

class AnimalController
{
    public function showAnimalsNames(): void
    {
        $dog = new Animal('Dog');
        $snake = new Animal('Snake');
        $horse = new Animal('Horse');

        $animals = [
            'dog' => $dog,
            'snake' => $snake,
            'horse' => $horse,
        ];

        include 'views/animal.view.php';
    }

}