<?php

$loader = new \Phalcon\Loader();

/**
  * Load library namespace
  */
$loader->registerNamespaces(array(
    'App\Library\Commands' => APP_PATH . '/library/commands',
    'App\Library\Orm' => APP_PATH . '/library/orm',
    'App\Library\Utils' => APP_PATH . '/library/utils',
    'Core\Library' => CORE_PATH . '/library',
    'Core\Library\Commands' => CORE_PATH . '/library/commands',
    'Core\Library\DataTables' => CORE_PATH . '/library/datatables',
    'Core\Library\Repositories' => CORE_PATH . '/library/repositories',
    'Core\Modules\Posting\Services' => CORE_PATH . '/modules/posting/services',
    'Core\Modules\Posting\Repositories' => CORE_PATH . '/modules/posting/repositories',
    'Core\Modules\Posting\Models' => CORE_PATH . '/modules/posting/models',
    'Core\Modules\Posting\Requests' => CORE_PATH . '/modules/posting/requests',
));


$loader->register();
