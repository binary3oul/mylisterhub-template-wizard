<?php

namespace MyListerHub\TemplateWizard;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MyListerHub\TemplateWizard\Commands\TemplateWizardCommand;

class TemplateWizardServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('template-wizard')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_template-wizard_table')
            ->hasCommand(TemplateWizardCommand::class);
    }
}
