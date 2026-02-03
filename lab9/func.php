<?php
echo "<pre>";

$dydis = rand(100, 150);
echo "1. Masyvo dydis: $dydis\n\n";

$masyvas = [];

for ($i = 0; $i < $dydis; $i++) {
    $masyvas[] = rand(1, 100);
}

echo "2. Sugeneruotas masyvas:\n";
print_r($masyvas);
echo "\n";

$suma = array_sum($masyvas);
echo "3. Visų masyvo elementų suma: $suma\n";

echo "</pre>";
