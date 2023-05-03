<?php
//ladowanie klasy recznie
//composer.json autoloadin psr-4
//ladowanie klasy z przestrzeni nazw
//rozwiazywanie konfliktow nazw w klasach


include 'vendor/autoload.php';

$person = new \Class\Person(firstName: 'Jan', lastName: 'Kowalski');
echo $person->getFullname();