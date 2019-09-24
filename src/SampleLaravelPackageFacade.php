<?php

namespace Erickpatrick\SampleLaravelPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Erickpatrick\SampleLaravelPackage\Skeleton\SkeletonClass
 */
class SampleLaravelPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sample-laravel-package';
    }
}
