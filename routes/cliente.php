<?php

declare(strict_types=1);

use App\Controllers\Site\ClienteController;

return [
    [
        'method' => 'GET',
        'path' => '/cliente',
        'action' => [
            ClienteController::class,
            'index',
        ],
    ]
];
