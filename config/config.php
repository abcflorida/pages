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

return [

    /*
    |--------------------------------------------------------------------------
    | Default Page
    |--------------------------------------------------------------------------
    |
    | Here you may specify the slug of the default page for your application.
    |
    */

    'default_page' => 'welcome',

    /*
    |--------------------------------------------------------------------------
    | Default Section area
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default section when using database storage
    | type.
    |
    */

    'default_section' => 'page',

    /*
    |--------------------------------------------------------------------------
    | Default Template
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default template used for database pages.
    |
    */

    'default_template' => 'layouts/default',

    /*
    |--------------------------------------------------------------------------
    | Default 404 Error Page
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default 404 page used for 404 error pages.
    |
    */

    'not_found' => null,

    /*
    |--------------------------------------------------------------------------
    | Exclude directories
    |--------------------------------------------------------------------------
    |
    | Here you may specify the directories that you want to exclude from
    | the template listing.
    |
    */

    'exclude' => [

        'modals',
        'pages',
        'partials',

    ],

];
