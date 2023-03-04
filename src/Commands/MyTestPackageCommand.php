<?php

namespace MMTE\MyTestPackage\Commands;

use Illuminate\Console\Command;

class MyTestPackageCommand extends Command
{
    public $signature = 'my-test-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
