<?php

/**
 * Part of the Platform Pages extension.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Cartalyst PSL License.
 *
 * This source file is subject to the Cartalyst PSL License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Abcflorida Bcpages
 * @version    1.0.1
 * @author     FLWeb Design Service LLC
 * @license    FLWeb PSL
 * @copyright  (c) 2011-2016, FlWeb Design LLC
 * @link       http://flwebdesignservice.com
 */

namespace Abcflorida\Pages\Providers;

use Exception;
use Cartalyst\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BcpagesServiceProvider extends ServiceProvider
{
    public function boot() {
        
        // Get the Page model
        $model = $this->app['Abcflorida\Pages\Models\Page\Bcpage'];

        // Register the menu page type
        $this->app['platform.menus.manager']->registerType(
            $this->app['platform.menus.types.page']
        );

        // Register the tags namespace
        $this->app['platform.tags.manager']->registerNamespace($model);

        // Register the attributes namespace
        $this->app['platform.attributes.manager']->registerNamespace($model);

        // Subscribe the registered event handler
        $this->app['events']->subscribe('platform.pages.handler.event');
        
    }

    public function register()
    {
        $this->prepareResources();

        // Register the repository
        $this->bindIf('acflorida.bcpages', 'Platform\Pages\Repositories\PageRepository');
    }
    
    protected function prepareResources()
    {
        $config = realpath(__DIR__.'/../../config/config.php');

        $this->mergeConfigFrom($config, 'abcflorida-pages');

        $this->publishes([
            $config => config_path('abcflorida-pages.php'),
        ], 'config');
    }
    
    
}