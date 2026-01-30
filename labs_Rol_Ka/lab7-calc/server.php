<?php
$expr = $_POST['expr'];
$file = "uploads/history.txt";

if (!preg_match('/^[0-9+\-*\/. ]+$/', $expr)) {
    echo json_encode(["result" => "Klaida", "history" => []]);
    exit;
}

try {
    eval("\$result = $expr;");
} catch (Throwable $e) {
    $result = "Klaida";
}

$line = "$expr = $result";

$history = file_exists($file)
    ? file($file, FILE_IGNORE_NEW_LINES)
    : [];

array_unshift($history, $line);
$history = array_slice($history, 0, 5);
file_put_contents($file, implode("\n", $history));

echo json_encode([
    "result" => $result,
    "history" => $history
]);
