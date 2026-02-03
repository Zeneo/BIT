<?php // server.php
$expr = $_POST['expr']; // Gauta išraiška
$file = "uploads/history.txt"; // Failo kelias istorijai

if (!preg_match('/^[0-9+\-*\/. ]+$/', $expr)) { // Patikriname leidžiamus simbolius
    echo json_encode(["result" => "Klaida", "history" => []]); // Grąžiname klaidą, jei yra neleistinų simbolių
    exit; // Išeiname iš scenarijaus
}

try { // Apskaičiuojame išraišką
    eval("\$result = $expr;"); // Naudojame eval (atsargiai su šiuo metodu)
} catch (Throwable $e) { // Gaudome klaidas
    $result = "Klaida"; // Nustatome rezultatą kaip klaidą
}

$line = "$expr = $result"; // Sukuriame istorijos įrašą
// Tvarkome istoriją
$history = file_exists($file)
    ? file($file, FILE_IGNORE_NEW_LINES) // Nuskaitome esamą istoriją
    : []; // Jei failas neegzistuoja, pradedame nuo tuščios istorijos

array_unshift($history, $line); // Pridedame naują įrašą į pradžią
$history = array_slice($history, 0, 5); // Išlaikome tik paskutinius 5 įrašus
file_put_contents($file, implode("\n", $history)); // Išsaugome atnaujintą istoriją
// Grąžiname rezultatą ir istoriją kaip JSON

echo json_encode([
    "result" => $result, // Apskaičiuotas rezultatas
    "history" => $history // Paskutiniai 5 rezultatai
]);
