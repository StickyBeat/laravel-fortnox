<?php

namespace KFoobar\Fortnox\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class DisplayTokensCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fortnox:tokens';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display information about Fortnox tokens';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->components->info(
            'Access token: ' . Redis::get('fortnox-access-token')
        );

        $this->components->info(
            'Refresh token: ' . Redis::get('fortnox-refresh-token')
        );

        return Command::SUCCESS;
    }
}
