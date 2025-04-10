<?php

namespace Dinakeri\PluginWIP\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dinakeri\PluginWIP\PluginWIP
 */
class PluginWIP extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Dinakeri\PluginWIP\PluginWIP::class;
    }
}
