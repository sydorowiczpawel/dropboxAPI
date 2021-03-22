<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;
use Kunnu\Dropbox\DropboxFile;

class DropboxServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $app = new DropboxApp(env('USER_ID'), env('USER_SECRET'), env('USER_TOKEN'));
        $dropbox = new Dropbox($app);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
