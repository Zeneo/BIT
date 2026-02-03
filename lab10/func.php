<?php

echo "<pre>";

$dydis = rand(50, 100);
echo "1. Masyvo dydis: $dydis\n\n";

$raides = range('a', 'z');

$masyvas = [];

for ($i = 0; $i < $dydis; $i++) {
    $masyvas[] = $raides[array_rand($raides)];
}

echo "2. Atsitiktinių raidžių masyvas:\n";
print_r($masyvas);
echo "\n";

$kombinacija = [];

for ($i = 0; $i < 10; $i++) {
    $zodis = '';
    $ilgis = rand(3, 10);

    for ($j = 0; $j < $ilgis; $j++) {
        $zodis .= $masyvas[array_rand($masyvas)];
    }

    $kombinacija[] = $zodis;
}

echo "3. Atsitiktiniai raidžių junginiai:\n";
print_r($kombinacija);
echo "</pre>";

echo "</pre>";
