<?php 
namespace Gaia\Seo\Facades;
use Illuminate\Support\Facades\Facade;

class MetaTag extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'metatag';
    }
}