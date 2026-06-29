<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Способы закупок
|--------------------------------------------------------------------------
|
| Здесь будут храниться параметры каждого способа закупки.
| Пока создаём структуру. Позже мы внесём точные сроки,
| полностью соответствующие оригинальному калькулятору.
|
*/

return [

    'auction' => [
        'id' => 'auction',
        'name' => 'Электронный аукцион',
        'enabled' => true,
    ],

    'competition' => [
        'id' => 'competition',
        'name' => 'Конкурс',
        'enabled' => true,
    ],

    'quotation' => [
        'id' => 'quotation',
        'name' => 'Запрос котировок',
        'enabled' => true,
    ],

    'proposal' => [
        'id' => 'proposal',
        'name' => 'Запрос предложений',
        'enabled' => true,
    ],

    'negotiation' => [
        'id' => 'negotiation',
        'name' => 'Конкурентные переговоры',
        'enabled' => true,
    ],

    'offer' => [
        'id' => 'offer',
        'name' => 'Запрос оферт',
        'enabled' => true,
    ],

    'marketing' => [
        'id' => 'marketing',
        'name' => 'Маркетинговое исследование',
        'enabled' => true,
    ],

    'custom' => [
        'id' => 'custom',
        'name' => 'Другой',
        'enabled' => true,
    ],

];
