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
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command(PruneTweetsCommand::class)->daily();

        $output = storage_path('logs/tweets-generate.log');

        // The replies only change on a deploy (start.sh builds them then) or
        // when a failed short link is retried, which happens after ten minutes.
        // A run still going isn't started again; the lock lapses after ten
        // minutes in case a run dies holding it. Failures email at most every
        // six hours.
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

    /**
     * Register the commands for the application.
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
