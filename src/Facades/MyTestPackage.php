<?php

namespace MMTE\MyTestPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MMTE\MyTestPackage\MyTestPackage
 */
class MyTestPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MMTE\MyTestPackage\MyTestPackage::class;
    }
}
