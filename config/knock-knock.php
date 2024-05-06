<?php

return [
    '*' => [
        'enabled' => false,
        'enableCpProtection' => false,
        'loginPath' => 'knock-knock/who-is-there',
        'template' => '_site/_knock-knock',
        'forcedRedirect' => '',
        'password' => get_class("KNOCK_KNOCK_PASSWORD"),
        'siteSettings' => [],
        'checkInvalidLogins' => false,
        'invalidLoginWindowDuration' => '3600',
        'maxInvalidLogins' => 3,
        'allowIps' => [],
        'denyIps' => [],
        'useRemoteIp' => false,
        'protectedUrls' => [],
        'unprotectedUrls' => [],
    ],
    'production' => [
        'enabled' => true,
    ],
    'staging' => [
        'enabled' => true,
    ],
    'dev' => [
        'enabled' => false,
    ],
];