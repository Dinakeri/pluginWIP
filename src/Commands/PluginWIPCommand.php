<?php

namespace Dinakeri\PluginWIP\Commands;

use Illuminate\Console\Command;

class PluginWIPCommand extends Command
{
    public $signature = 'pluginwip';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
