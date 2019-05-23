<?php
namespace App\Posting;
use Phalcon\DiInterface;
use Phalcon\Loader;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Mvc\View;

class Module implements ModuleDefinitionInterface
{
    /**
     * Register a specific autoloader for the module
     * @param DiInterface|null $di
     */
    public function registerAutoloaders(DiInterface $di = null)
    {
        $loader = new Loader();
        $loader->registerNamespaces([
            'App\Posting\Controllers\Web' => __DIR__ . '/controllers/web',
            'App\Posting\Controllers\Api' => __DIR__ . '/controllers/api',
            'App\Posting\Controllers\Common' => __DIR__ . '/controllers/common',
            'App\Posting\Models' => __DIR__ . '/models',
            'App\Posting\Repositories' => __DIR__ . '/repository'
        ]);
        $loader->register();
    }

    /**
     * Register specific services for the module
     * @param DiInterface|null $di
     */
    public function registerServices(DiInterface $di = null)
    {
        // Registering the view component
        $di['view'] = function () {
            $view = new View();
            $view->setViewsDir(__DIR__ . '/views/');
            $view->registerEngines(
                [
                    ".volt" => "voltService",
                ]
            );
            return $view;
        };
    }
}