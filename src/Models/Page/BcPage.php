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

namespace Abcflorida\Pages\Models\Page;

use Closure;
use Illuminate\Support\Str;
use Cartalyst\Tags\TaggableTrait;
use Cartalyst\Tags\TaggableInterface;
use Illuminate\Database\Eloquent\Model;
use Platform\Pages\Models\Page as PPage;
use Cartalyst\Attributes\EntityInterface;
use Platform\Attributes\Traits\EntityTrait;
use Cartalyst\Support\Traits\NamespacedEntityTrait;

class BcPage extends PPage
{

    protected $with = [
        'values.attribute',
    ];
    
    public function scopeSite($query, $site = null)
    {
        if ( $site ) {
            
            return $query->whereHas('values', function ( $query ) use ( $site ) { 
            
                $query->where(['value'=>$site]);

            } );
            
        }
        
    }

}