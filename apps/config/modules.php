<?php

return array(

    'posting' => [
        'namespace' => 'App\Posting',
        'webControllerNamespace' => 'App\Posting\Controllers\Web',
        'apiControllerNamespace' => 'App\Posting\Controllers\Api',
        'className' => 'App\Posting\Module',
        'path' => APP_PATH . '/modules/posting/Module.php',
        'defaultRouting' => true,
        'defaultController' => 'Comment',
        'defaultAction' => 'index'
    ],

);