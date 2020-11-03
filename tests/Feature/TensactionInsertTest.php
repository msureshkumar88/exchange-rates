<?php

namespace Tests\Feature;

use App\Models\ExchangeRate;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TensactionInsertTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testTransactionInsert()
    {
        $initialCount = ExchangeRate::count();
        $response = $this->postJson('/api/rates', [
            'userId' => 134256,
            'currencyFrom' => 'EUR',
            'currencyTo' => 'GBP',
            'amountSell' => 3000,
            'amountBuy' => 2700,
            'rate' => 0.7500,
            'timePlaced' => '27-JAN-18 10:27:44',
            'originatingCountry' => 'FR',
        ], ['Content-Type' => 'application/json', 'Accept' => 'application/json']);
        $newCount = ExchangeRate::count();
        $response->assertStatus(200);
        $this->assertEquals($initialCount + 1, $newCount);
    }
}
