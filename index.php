<?php

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

$i = $i -1;
$i -= 2;
$i-- ;

echo $i; // 7

$i *=5;
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
