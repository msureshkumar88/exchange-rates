<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ChartApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testBuySellChart()
    {
        $response = $this->getJson('/api/rates/daily-buy-sell');
        $response->assertJson($response->json());
        $this->assertTrue($response->json()['status']);
        $response->assertStatus(200);
    }
}
