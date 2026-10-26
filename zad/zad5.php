<?php
$fib = array();
$fib[0] = 0;
$fib[1] = 1;
for ($i = 2; $i < 100; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}
echo "Fibonacci: " . implode(", ", $fib) . "<br><br>";

$potegi = array();
for ($i = 0; $i < 100; $i++) {
    $potegi[$i] = 2 ** $i;
}
echo "Potęgi 2: " . implode(", ", $potegi) . "<br><br>";

$trojki = array();
for ($i = 0; $i < 100; $i++) {
    $trojki[$i] = 3 * ($i + 1);
}
echo "3, 6, 9...: " . implode(", ", $trojki) . "<br><br>";

$dwojki = array();
$dwojki[0] = 2;
for ($i = 1; $i < 100; $i++) {
    $dwojki[$i] = $dwojki[$i - 1] * 2;
}
echo "2, 4, 8...: " . implode(", ", $dwojki) . "<br>";
