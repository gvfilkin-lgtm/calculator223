<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

$response = [
    'success' => true,
    'version' => '1.0.0',
    'message' => 'API калькулятора 223-ФЗ',
    'data' => []
];

echo json_encode(
    $response,
    JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
);
