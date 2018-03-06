<?php

// comparaisons

$a = 10;
$b = 15;
$c = 10;

$d = 0;
$emptyString = '';
$bool = false;

$aString = ' 10    ';

var_dump($a == $b); // false
var_dump($a == $c); // true

var_dump($a > $b); // false
var_dump($a < $b); // true

var_dump($a > $c); // false
var_dump($a >= $c); // true
var_dump($a <= $c); // true

var_dump($d == $emptyString); // true
var_dump($d == $bool); // true

var_dump($a != $b); // true
var_dump($a != $c); // false
var_dump($d != $bool); // false


var_dump($d === $emptyString); // false
var_dump($d !== $emptyString); // true


var_dump($a == $aString); // true
var_dump($a === $aString); // false

var_dump($a === $c && $a === $b); // false
var_dump($a === $c && $a !== $b); // true

var_dump($a === $c || $a === $b); // true
var_dump($a !== $c || $a === $b); // false

// true && true => true
// true && false => false
// true || true => true
// true || false => true
// false || false => false

if ($a === $c) {
    echo 'les valeurs sont égales';
} else {
    echo 'les valeurs ne sont pas égales';
}

if ($a > $c) {
    echo 'supérieur';
} elseif ($a < $c) {
    echo 'inférieur';
} else {
    echo 'égal';
}

$name = 'sylvain';
$chaineVide = '';

if ($name) {
    echo 'tu as un nom';
}

if (!$chaineVide) {
    echo 'tu n\'as pas de valeur';
}

$totzlek = 'ekf';

var_dump(isset($totzlek));
var_dump(empty($totzlek));

if ($a == 10) {
    echo 'ok';
}

// yoda condition
# commentaire

if (10 == $a) {
    echo 'ok';
} else {
    echo 'ko';
}

echo '<hr/>';
$notes = [10,15,4,8];

for ($i = 0; $i < 5; $i++) {
    echo $i;
}

for ($i = 10; $i < 50; $i+=10) {
    echo $i; // 10, 20, 30, 40
}

echo '<hr/>';

$nbNotes = count($notes);
for ($i = 0; $i < $nbNotes; $i++) {
    echo $notes[$i] . ',';
}

$animals = [
    'dog' => 'Médor',
    'cat' => 'Isidor',
    'dinosaure' => 'Denver',
    'dolphin' => 'Flipper',
];

foreach ($animals as $animal) {
    echo $animal;
}

foreach ($animals as $species => $animal) {
    echo $animal . ' is a ' . $species;
}


