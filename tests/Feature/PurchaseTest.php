<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use App\Purchase;
class PurchaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPurchase()
    {
        
     $purchase = factory(Purchase::class)->create();

        $this->actingAs($purchase, 'purchase')
            ->get('/purchase')
            ->assertStatus(200)
            ->assertJson($purchase->toArrray());
             $this->assertTrue(true);
    }
}
