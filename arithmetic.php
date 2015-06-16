<?php

$a = 12;
$b = 3;

function add($a, $b)
{
    return $a + $b;
}
function subtract($a, $b)
{
    return $a - $b;
}
function multiply($a, $b)
{
    return $a * $b;
}
function divide($a, $b)
{
    return $a / $b;
}
function modulus($a, $b)
{
	return $a % $b;
}
echo add(5, 4);
echo PHP_EOL;
echo subtract(9, 1);
echo PHP_EOL;
echo multiply(5, 8);
echo PHP_EOL;
echo divide(12, 4);
echo PHP_EOL;
echo modulus(100, 20);
echo PHP_EOL;
?>