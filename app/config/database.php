<?php

declare(strict_types=1);

return [
    'default' => 'sqlite',

    'connections' => [
        'sqlite' => [
            'driver' => 'sqlite',
            'database' => __DIR__ . '/../storage/database.sqlite',
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => 'mysql',
            'dbname' => 'app',
            'user' => 'app',
            'password' => 'secret',
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => 'pgsql',
            'dbname' => 'app',
            'user' => 'app',
            'password' => 'secret',
        ],
    ],
];
