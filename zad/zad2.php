<form method="get">
    Liczby <input type="text" name="liczby">
    <input type="submit" value="OK">
</form>
<?php
$tab = array();
foreach (explode(" ", trim($_GET['liczby'] ?? "")) as $x) {
    if (is_numeric($x)) {
        $tab[] = (int)$x;
    }
}
$n = count($tab);
if ($n == 0) {
    exit;
}

$min = $tab[0];
$max = $tab[0];
for ($i = 1; $i < $n; $i++) {
    if ($tab[$i] < $min) $min = $tab[$i];
    if ($tab[$i] > $max) $max = $tab[$i];
}
echo "Najmniejszy: $min<br>Największy: $max<br>";

$suma = 0;
for ($i = 0; $i < $n; $i++) {
    $suma += $tab[$i];
}
echo "Średnia: " . ($suma / $n) . "<br>";

$trojki = 0;
for ($i = 0; $i < $n; $i++) {
    $trojki += substr_count((string)abs($tab[$i]), "3");
}
echo "Ilość wystąpień cyfry 3: $trojki<br>";

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - 1 - $i; $j++) {
        if ($tab[$j] > $tab[$j + 1]) {
            $tmp = $tab[$j];
            $tab[$j] = $tab[$j + 1];
            $tab[$j + 1] = $tmp;
        }
    }
}
echo "Posortowana: " . implode(", ", $tab) . "<br>";

if ($n % 2 == 1) {
    $mediana = $tab[intdiv($n, 2)];
} else {
    $mediana = ($tab[$n / 2 - 1] + $tab[$n / 2]) / 2;
}
echo "Mediana: $mediana<br>";

echo "3 najmniejsze: " . implode(", ", array_slice($tab, 0, 3)) . "<br>";
echo "3 największe: " . implode(", ", array_slice($tab, -3)) . "<br>";

for ($i = 0; $i < $n; $i++) {
    $tab[$i] = $tab[$i] * $tab[$i];
}
echo "Kwadraty: " . implode(", ", $tab) . "<br>";

$parzyste = 0;
$nieparzyste = 0;
$podzielne3 = 0;
for ($i = 0; $i < $n; $i++) {
    if ($tab[$i] % 2 == 0) $parzyste++;
    else $nieparzyste++;
    if ($tab[$i] % 3 == 0) $podzielne3++;
}
echo "Parzyste: $parzyste, nieparzyste: $nieparzyste<br>";
echo "Podzielne przez 3: $podzielne3<br>";
