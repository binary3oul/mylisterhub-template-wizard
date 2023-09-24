<?php

namespace MyListerHub\TemplateWizard\Commands;

use Illuminate\Console\Command;

class TemplateWizardCommand extends Command
{
    public $signature = 'template-wizard';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
