<?php

declare(strict_types=1);

use App\Controllers\Site\QuemController;

return [
    [
        'method' => 'GET',
        'path' => '/quemsomos',
        'action' => [
            QuemController::class,
            'index',
        ],
    ]
];
