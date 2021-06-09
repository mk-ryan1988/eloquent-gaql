<?php

namespace MkRyan1988\GaqlBuilder;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MkRyan1988\GaqlBuilder\GaqlBuilder
 */
class GaqlBuilderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'elequent-gaql';
    }
}
