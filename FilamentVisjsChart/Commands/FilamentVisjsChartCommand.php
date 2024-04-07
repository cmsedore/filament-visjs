<?php

namespace Cmsedore\FilamentVisjsChart\Commands;

use Illuminate\Console\Command;

class FilamentVisjsChartCommand extends Command
{
    public $signature = 'filament-visjs';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
