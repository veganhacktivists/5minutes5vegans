<?php

namespace App\Console;

use App\Console\Commands\GenerateTweetsCommand;
use App\Console\Commands\PruneTweetsCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{
    protected $commands = [
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command(PruneTweetsCommand::class)->daily();

        $output = storage_path('logs/tweets-generate.log');

        // Replies only change on a deploy or when a failed short link is
        // retried (after ten minutes). Failures email at most every six hours.
        $schedule->command(GenerateTweetsCommand::class)
            ->everyTenMinutes()
            ->withoutOverlapping(10)
            ->sendOutputTo($output)
            ->onFailure(function () use ($output) {
                if (! Cache::add('tweets-generate-failure-emailed', true, now()->addHours(6))) {
                    return;
                }

                Mail::raw(
                    "tweets:generate is failing. This is the last run's output. You won't get another email about it for six hours.\n\n".@file_get_contents($output),
                    fn ($message) => $message->to('admin@veganhacktivists.org')->subject('5 Minutes 5 Vegans: replies are failing to generate')
                );
            });
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
