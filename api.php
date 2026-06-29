<?php

declare(strict_types=1);

require_once __DIR__ . '/autoload.php';

use Calculator223\Classes\Procurement;

header('Content-Type: application/json; charset=utf-8');

try {

    $action = $_GET['action'] ?? '';

    switch ($action) {

        case 'procurements':

            $procurement = new Procurement();

            echo json_encode([
                'success' => true,
                'data' => array_values($procurement->enabled())
            ], JSON_UNESCAPED_UNICODE);

            break;

        default:

            echo json_encode([
                'success' => false,
                'message' => 'Неизвестный запрос.'
            ], JSON_UNESCAPED_UNICODE);

    }

} catch (Throwable $e) {

    http_response_code(500);

    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ], JSON_UNESCAPED_UNICODE);

}
