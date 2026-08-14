<?php

declare(strict_types=1);

use App\Controllers\Site\ClienteLController;

return [
    [
        'method' => 'GET',
        'path' => '/clienteL',
        'action' => [
            ClienteLController::class,
            'index',
        ],
    ]
];
