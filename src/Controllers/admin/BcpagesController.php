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

namespace Abcflorida\Pages\Controllers\Admin;

use Platform\Pages\Controllers\Admin\PagesController as platformpagescontroller;
//use Platform\Access\Controllers\AdminController;
use Platform\Pages\Repositories\PageRepositoryInterface;

class BcpagesController extends platformpagescontroller
{
    /**
     * The Pages repository.
     *
     * @var \Platform\Pages\Repositories\PageRepositoryInterface
     */
    protected $pages;

    /**
     * Holds all the mass actions we can execute.
     *
     * @var array
     */
    protected $actions = [
        'delete',
        'enable',
        'disable',
    ];

    /**
     * Constructor.
     *
     * @param  \Platform\Pages\Repositories\PageRepositoryInterface  $pages
     * @return void
     */
    public function __construct(PageRepositoryInterface $pages)
    {
        parent::__construct($pages);
        $this->pages = $pages;
    }
    
    public function index() {
        
        $tags = $this->pages->getAllTags();
        
        //dd( session()->all() );

        return view('abcflorida/pages::index');
        
    }
    
    /**
     * 
     * Datasource for the pages Data Grid.
     *
     * @return \Cartalyst\DataGrid\DataGrid
     */
    public function grid()
    {
        $columns = [
            'id',
            'name',
            'slug',
            'uri',
            'enabled',
            'created_at',
        ];

        $settings = [
            'sort'      => 'created_at',
            'direction' => 'desc',
            'pdf_view'  => 'pdf',
        ];

        $transformer = function ($element) {
            $element->edit_uri = route('admin.pages.edit', $element->id);

            return $element;
        };
        
        $sitepages = $this->pages->createModel()->site( session()->get('admin.current_site'));
                       
        return datagrid($sitepages, $columns, $settings, $transformer);
        
        
    }
    
}
