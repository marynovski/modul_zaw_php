<?php

namespace Class;

class Person
{
    private string $firstName;

    private string $lastName;


    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullname(): string
    {
        return 'Imię i nazwisko: ' . $this->firstName . ' ' . $this->lastName;
    }
}