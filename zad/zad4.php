<form method="get">
    Liczba a: <input type="number" name="a">
    <input type="submit" value="OK">
</form>
<?php
$A = array();
for ($i = 0; $i < 100; $i++) {
    $A[$i] = rand(1, 30);
}
echo "Tablica: " . implode(", ", $A) . "<br><br>";

$max = $A[0];
for ($i = 1; $i < 100; $i++) {
    if ($A[$i] > $max) $max = $A[$i];
}
$ile = 0;
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] == $max) $ile++;
}
echo "Największa: $max, wystąpiła $ile razy<br>";

echo "Nieparzyste: ";
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] % 2 != 0) echo $A[$i] . " ";
}
echo "<br>";

echo "Nieparzyste indeksy: ";
for ($i = 1; $i < 100; $i += 2) {
    echo $A[$i] . " ";
}
echo "<br>";

$przedzial = array();
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] >= 5 && $A[$i] < 15) $przedzial[] = $A[$i];
}
echo "W przedziale <5, 15): " . count($przedzial) . " - " . implode(" ", $przedzial) . "<br>";

$a = (int)($_GET['a'] ?? 0);
$najblizszy = $A[0];
for ($i = 1; $i < 100; $i++) {
    if (abs($A[$i] - $a) < abs($najblizszy - $a)) $najblizszy = $A[$i];
}
echo "Najbliższy liczbie $a: $najblizszy<br>";

$imin = 0;
for ($i = 1; $i < 100; $i++) {
    if ($A[$i] < $A[$imin]) $imin = $i;
}
echo "Minimum: " . $A[$imin] . " (indeks $imin)<br>";
echo "Poprzednik: " . ($imin > 0 ? $A[$imin - 1] : "brak") . "<br>";
echo "Następnik: " . ($imin < 99 ? $A[$imin + 1] : "brak") . "<br>";

$wieksze = array();
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] > 10) $wieksze[] = $A[$i];
}
echo "Większe od 10 (" . count($wieksze) . "): " . implode(" ", $wieksze) . "<br>";

$B = array();
$B[0] = $A[0];
for ($i = 1; $i < 100; $i++) {
    $B[$i] = $B[$i - 1] + $A[$i];
}
echo "B: " . implode(" ", $B) . "<br>";

$C = $A;
for ($i = 0; $i < 99; $i++) {
    for ($j = 0; $j < 99 - $i; $j++) {
        if ($C[$j] < $C[$j + 1]) {
            $tmp = $C[$j];
            $C[$j] = $C[$j + 1];
            $C[$j + 1] = $tmp;
        }
    }
}
echo "Malejąco: " . implode(" ", $C) . "<br>";

echo "Co najmniej 3 razy: ";
foreach (array_count_values($A) as $liczba => $ile) {
    if ($ile >= 3) echo $liczba . " ";
}
echo "<br>";
