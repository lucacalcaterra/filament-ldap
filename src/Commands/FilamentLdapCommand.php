<?php

namespace Lucacalcaterra\FilamentLdap\Commands;

use Illuminate\Console\Command;

class FilamentLdapCommand extends Command
{
    public $signature = 'filament-ldap';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
