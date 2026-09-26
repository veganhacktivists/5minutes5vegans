<?php

namespace Tests\Unit;

use App\Services\TweetGenerator;
use PHPUnit\Framework\TestCase;

class TweetGeneratorTest extends TestCase
{
    public function testItBuildsEveryWordingOfATopic()
    {
        $topics = [[
            'icon' => 'fas fa-leaf',
            'title' => 'Test',
            'body' => [['Hi!', 'Hey!'], ['Going vegan is easy.', 'Going vegan is fun.'], ['Good luck!']],
        ]];

        $reply = (new TweetGenerator)->generate($topics)[0];

        $this->assertSame('Test', $reply['title']);
        $this->assertSame('fas fa-leaf', $reply['icon']);
        $this->assertSame([
            'Hi! Going #vegan is easy. Good luck!',
            'Hi! Going #vegan is fun. Good luck!',
            'Hey! Going #vegan is easy. Good luck!',
            'Hey! Going #vegan is fun. Good luck!',
        ], $reply['variants']);
        $this->assertArrayNotHasKey('body', $reply);
    }

    public function testItTagsOnlyTheFirstStandaloneVegan()
    {
        $generator = new TweetGenerator;

        $this->assertSame('Try #vegan food, vegan is great', $generator->tag('Try vegan food, vegan is great'));
        $this->assertSame('#Vegan, and proud', $generator->tag('Vegan, and proud'));
    }

    public function testItAddsTheHashtagWhenThereIsNoStandaloneVegan()
    {
        $generator = new TweetGenerator;

        $this->assertSame('Most vegans love Veganuary #vegan', $generator->tag('Most vegans love Veganuary'));
    }

    public function testItLeavesNamesAlone()
    {
        $generator = new TweetGenerator;

        $this->assertSame('Hi! Vegan Bootcamp is free #vegan', $generator->tag('Hi! Vegan Bootcamp is free'));
        $this->assertSame('Vegan Bootcamp helps you go #vegan', $generator->tag('Vegan Bootcamp helps you go vegan'));
        $this->assertSame('Le fromage #vegan Violife', $generator->tag('Le fromage vegan Violife'));
    }
}
