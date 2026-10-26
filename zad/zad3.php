<form method="get">
    10 liter (oddzielone spacją): <input type="text" name="litery"><br>
    Wyraz 10-literowy: <input type="text" name="wyraz" maxlength="10"><br>
    <input type="submit" value="OK">
</form>
<?php
$tab = array_slice(explode(" ", trim($_GET['litery'] ?? "")), 0, 10);
echo "Litery: " . implode(", ", $tab) . "<br>";

$wyraz = $_GET['wyraz'] ?? "";
if (mb_strlen($wyraz) == 10) {
    $tab = array();
    for ($i = 0; $i < 10; $i++) {
        $tab[$i] = mb_substr($wyraz, $i, 1);
    }
    echo "Wyraz: " . implode(", ", $tab) . "<br>";
}

for ($i = 0; $i < count($tab); $i++) {
    if ($tab[$i] == mb_strtoupper($tab[$i])) {
        $tab[$i] = mb_strtolower($tab[$i]);
    } else {
        $tab[$i] = mb_strtoupper($tab[$i]);
    }
}
echo "Zamienione: " . implode(", ", $tab) . "<br>";

shuffle($tab);
echo "Losowo: " . implode(", ", $tab) . "<br>";
