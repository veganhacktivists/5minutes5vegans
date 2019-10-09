<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Mailchimp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mailchimp';
    }
}
