<?php


function sayHello (string $firstName, string $lastName = 'pasDeNom', $option='') :string
{
    return 'Hello ' . $firstName . ' ' . strtoupper($lastName);
}
//
//$lastName = 'toto';
//$firstName = 'titi';
////echo sayHello($firstName, $lastName);
//echo sayHello($lastName);
//
//echo sayHello('Nicolas', 'Vincent');
//echo sayHello('Bob');
//

