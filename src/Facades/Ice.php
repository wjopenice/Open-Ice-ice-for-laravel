<?php
namespace Openice\Ice\Facades;
use Illuminate\Support\Facades\Facade;
class Ice extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ice';
    }
}
