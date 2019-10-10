<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MailchimpServiceProvider extends ServiceProvider
{
    public function register()
    {
        \App::bind('mailchimp', function () {
            return new \Lib\Mailchimp();
        });
    }

    public function boot()
    {
    }
}
