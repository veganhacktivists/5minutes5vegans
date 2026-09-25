<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class HealthTest extends TestCase
{
    public function testItIsUpWhenTheDatabaseAnswers()
    {
        $response = $this->get('/up')->assertOk()->assertExactJson(['status' => 'up']);

        $this->assertEmpty($response->headers->getCookies());
        $this->assertStringContainsString('no-store', $response->headers->get('Cache-Control'));
    }

    public function testItIsDownWhenTheDatabaseDoesnt()
    {
        config(['database.connections.sqlite.database' => '/no/such/folder/database.sqlite']);
        DB::purge('sqlite');

        $this->get('/up')->assertStatus(503)->assertExactJson(['status' => 'down']);
    }
}
