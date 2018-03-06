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