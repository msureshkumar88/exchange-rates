<?php

namespace Tests\Feature;

use App\Models\ExchangeRate;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TransactionListTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->getJson('api/rates');
        $transactionCount = ExchangeRate::count();
        $this->assertGreaterThan(0, $transactionCount);
        $response->assertStatus(200);
    }
}
