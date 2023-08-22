<?php

namespace KFoobar\Fortnox\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class PurgeTokensCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fortnox:clear {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove the fortnox token cache file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $force = $this->argument('force');

        if (!$this->confirmAction() && !$force ) {
            $this->components->info('Aborting...');

            return Command::SUCCESS;
        }

        try {
            Redis::del('fortnox-access-token');
            Redis::del('fortnox-refresh-token');

        } catch (\Exception) {
            $this->components->error('Failed to cached tokens!');

            return Command::FAILURE;
        }

        $this->components->info('Successfully cleared cached tokens!');

        return Command::SUCCESS;
    }

    /**
     * Prompts the user for confirmation.
     *
     * @return bool
     */
    protected function confirmAction(): bool
    {
        $this->components->warn('This will clear all your cached tokens! Make sure you add a valid refresh token to your .env file to continue using the Fortnox API.');

        return $this->confirm('Do you want to continue?');
    }
}
