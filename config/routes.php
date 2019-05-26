<?php

use FreeElephants\RestDaemonExample\GetUptimeHandler;

return [
    'endpoints' => [
        '/uptime' => [
            'handlers' => [
                'GET' => GetUptimeHandler::class,
            ],
        ],
    ],
];