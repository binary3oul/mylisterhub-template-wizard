<?php

namespace MyListerHub\TemplateWizard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MyListerHub\TemplateWizard\TemplateWizard
 */
class TemplateWizard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MyListerHub\TemplateWizard\TemplateWizard::class;
    }
}
