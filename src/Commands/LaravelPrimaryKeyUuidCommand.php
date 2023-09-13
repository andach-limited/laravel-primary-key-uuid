<?php

namespace Andach\LaravelPrimaryKeyUuid\Commands;

use Illuminate\Console\Command;

class LaravelPrimaryKeyUuidCommand extends Command
{
    public $signature = 'laravel-primary-key-uuid';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
