<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Автозагрузка классов
|--------------------------------------------------------------------------
|
| Простая PSR-4-подобная автозагрузка.
|
*/

spl_autoload_register(function (string $class): void {

    $prefix = 'Calculator223\\Classes\\';

    if (strpos($class, $prefix) !== 0) {
        return;
    }

    $className = substr($class, strlen($prefix));

    $file = __DIR__ . '/classes/' . $className . '.php';

    if (file_exists($file)) {
        require_once $file;
    }

});
