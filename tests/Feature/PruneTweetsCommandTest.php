<?php

namespace Tests\Feature;

use App\Models\Tweet;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PruneTweetsCommandTest extends TestCase
{
    use RefreshDatabase;

    public function testOnlyTheNewestPostsInEachLanguageAreKept()
    {
        Tweet::factory()->count(7)
            ->state(new Sequence(fn (Sequence $sequence) => ['id' => (string) (1001 + $sequence->index), 'lang' => 'en']))
            ->create();
        Tweet::factory()->count(3)
            ->state(new Sequence(fn (Sequence $sequence) => ['id' => (string) (2001 + $sequence->index), 'lang' => 'de']))
            ->create();

        $this->artisan('tweets:prune', ['--keep' => 5])->assertSuccessful();

        $this->assertEquals(['1003', '1004', '1005', '1006', '1007'], Tweet::where('lang', 'en')->orderBy('id')->pluck('id')->all());
        $this->assertSame(3, Tweet::where('lang', 'de')->count());
    }

    public function testItRunsDaily()
    {
        $this->app->make(Kernel::class);
        $event = collect($this->app->make(Schedule::class)->events())
            ->first(fn ($event) => str_contains($event->command, 'tweets:prune'));

        $this->assertNotNull($event);
        $this->assertSame('0 0 * * *', $event->expression);
    }
}
