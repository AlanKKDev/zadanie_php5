<?php
$tab1 = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);

echo $tab1[4] . "<br>";
$tab1[6] = 12;

$tab2 = array();
for ($i = 0; $i < count($tab1); $i++) {
    $tab2[$i] = $tab1[$i];
}

$tab3 = array();
for ($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}

for ($i = 0; $i < count($tab1); $i++) {
    $tab2[$i] = $tab1[count($tab1) - 1 - $i];
}

echo "tab1: " . implode(", ", $tab1) . "<br>";
echo "tab2: " . implode(", ", $tab2) . "<br>";
echo "tab3: " . implode(", ", $tab3) . "<br>";
