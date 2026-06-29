<?php

declare(strict_types=1);

namespace Calculator223\Classes;

class Procurement
{
    /**
     * Конфигурация способов закупки.
     *
     * @var array
     */
    private array $procurements = [];

    /**
     * Загружает конфигурацию.
     */
    public function __construct()
    {
        $configFile = dirname(__DIR__) . '/config/procurement.php';

        if (!file_exists($configFile)) {
            throw new \RuntimeException(
                'Не найден файл конфигурации способов закупки.'
            );
        }

        $this->procurements = require $configFile;
    }

    /**
     * Получить все способы закупки.
     */
    public function all(): array
    {
        return $this->procurements;
    }

    /**
     * Получить только активные способы.
     */
    public function enabled(): array
    {
        return array_filter(
            $this->procurements,
            static fn(array $item): bool => ($item['enabled'] ?? false) === true
        );
    }

    /**
     * Получить один способ закупки по ID.
     */
    public function find(string $id): ?array
    {
        return $this->procurements[$id] ?? null;
    }

    /**
     * Проверить существование способа закупки.
     */
    public function exists(string $id): bool
    {
        return isset($this->procurements[$id]);
    }
}
