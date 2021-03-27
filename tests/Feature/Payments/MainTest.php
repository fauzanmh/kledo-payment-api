<?php

namespace Tests\Feature\Payments;

use App\Models\Payments\Main as Payment;
use Tests\TestCase;

class MainTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetPayments()
    {
        $response = $this->getJson('api/payments');

        $response->assertStatus(200);
    }

    public function testCreatePayments()
    {
        $response = $this->postJson('api/payments/create', ['payment_name' => 'BCA']);

        $response->assertStatus(200);
    }

    public function testDestroyPayments()
    {
        $id = Payment::orderBy('id', 'desc')->pluck('id')->first();
        $response = $this->deleteJson('api/payments/destroy', ['id' => [$id]]);

        $response->assertStatus(200);
    }


    public function testValidationCreate()
    {
        $response = $this->postJson('/api/payments/create', ['name' => 'BCA']);

        $response->assertStatus(422);
    }

    public function testValidationDestroy()
    {
        $response = $this->deleteJson('/api/payments/destroy', ['id' => [0]]);

        $response->assertStatus(422);
    }
}
