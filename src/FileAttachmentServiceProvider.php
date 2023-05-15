<?php

namespace KFoobar\Fortnox;

use Illuminate\Support\ServiceProvider;
use KFoobar\Fortnox\Commands\DisplayTokensCommand;
use KFoobar\Fortnox\Commands\PurgeTokensCommand;
use KFoobar\Fortnox\Commands\RefreshTokensCommand;

class FileAttachmentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/fortnox-file-attachments.php', 'fileattachments'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
