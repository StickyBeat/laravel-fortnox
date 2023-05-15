<?php

namespace KFoobar\Fortnox\Facades;

use Illuminate\Support\Facades\Facade;

class FileAttachments extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \KFoobar\Fortnox\Services\FileAttachments::class;
    }
}
