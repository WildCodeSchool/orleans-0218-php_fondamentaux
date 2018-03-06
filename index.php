<?php

require 'functions.php';

$i = 0;
echo $i;  // 0

$i = 5;
echo $i; // 5

$j = $i + 1;
echo $i; // 5
echo $j; // 6

$i = $i + 1;
echo $i; // 6
echo $j; // 6

$i += 1; // pareil que $i = $i + 1;
echo $i; // 7

$i += 3; // pareil que $i = $i + 3;
echo $i; // 10

$i++; // incrémente de 1  pareil que $i += 1
echo $i; //11

$i = $i - 1;
$i -= 2;
$i--;

echo $i; // 7

$i *= 5;
echo $i; // 35

$message = 'Hello';
$name = 'Bilbo';

echo $message; // Hello
echo $name; // Bilbo

// Hello Bilbo
echo $message . $name; // HelloBilbo
echo $message . ' ' . $name; // Hello Bilbo
echo "$message $name"; // Hello Bilbo
$maConcatanetion = $message . ' ' . $name;
echo strtoupper($maConcatanetion); // HELLO BILBO
$maConcatanetionUpper = strtoupper($maConcatanetion);
echo $maConcatanetion; // Hello Bilbo
echo $maConcatanetionUpper; // HELLO BILBO

$myTab = [10, 20, 30];
print_r($myTab);
var_dump($myTab); // utile pour débug

echo '<hr/>';

$ages = [18, 25, 52, 72];
// $ages = array(18,25,52,72);

echo $ages[0]; // 18
echo $ages[2]; // 52

$ages[] = 45;
$ages[8] = 54;
$ages[] = 14;

sort($ages);

var_dump($ages);


//$animals['dog'] = 'Médor';
//$animals['cat'] = 'Isidor';
//$animals = array('dog' => 'Médor', 'cat' => 'Isidor');
$animals = [
    'dog' => 'Médor',
    'cat' => 'Isidor',
    'dinosaure' => 'Denver',
    'dolphin' => 'Flipper',
];
$animals['squirrel'] = 'Tic';

echo $animals['dog']; // Médor
$animals['dog'] = 'Lassie';

var_dump(in_array('Denver', $animals)); // true
var_dump(key_exists('cat', $animals)); // true

asort($animals);
ksort($animals);

var_dump($animals);

$persons[] = [
    'name' => [
        'firstName'=>'Bilbo',
        'lastName'=>'Baggins',
    ],
    'age' => 120,
];

echo $persons[0]['name']['firstName'];
echo $persons[0]['age'];

var_dump($persons);

echo sayHello('Nicolas', 'Vincent');


//require 'structures_controle.php';