<?php

declare(strict_types=1);

use App\Controllers\Site\ClienteCController;

return [
    [
        'method' => 'GET',
        'path' => '/clientec',
        'action' => [
            ClienteCController::class,
            'index',
        ],
    ]
];
