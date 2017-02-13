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
 * @package    Platform Pages extension
 * @version    4.0.1
 * @author     Cartalyst LLC
 * @license    Cartalyst PSL
 * @copyright  (c) 2011-2016, Cartalyst LLC
 * @link       http://cartalyst.com
 */

namespace Abcflorida\Pages\Controllers\Frontend;

use Illuminate\Routing\Router;
use Cartalyst\Sentinel\Sentinel;
//use Platform\Foundation\Controllers\Controller;
use Platform\Pages\Repositories\PageRepositoryInterface;
//use Symfony\Component\HttpKernel\Exception\HttpException;
use Platform\Pages\Controllers\Frontend\PagesController as PlatformPages;


class BcpagesController extends PlatformPages
{
    /**
     * The Pages repository.
     *
     * @var \Platform\Pages\Repositories\PageRepositoryInterface
     */
    protected $pages;

    /**
     * The Cartalyst Sentinel instance.
     *
     * @var \Cartalyst\Sentinel\Sentinel
     */
    protected $sentinel;
    
    protected $app;

    /**
     * Constructor.
     *
     * @param  \Platform\Pages\Repositories\PageRepositoryInterface
     * @param  \Cartalyst\Sentinel\Sentinel
     * @param  \Illuminate\Routing\Router
     * @return void
     */
    public function __construct(PageRepositoryInterface $pages, Sentinel $sentinel)
    {
        parent::__construct( $pages, $sentinel );

        $this->sentinel = $sentinel;

        $this->pages = $pages;

    }

    /**
     * Render the page.
     *
     * @return mixed
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */

}
