<?php

namespace Tests\Feature\Payments;

use App\Jobs\DestroyPaymentJob;
use App\Models\Payments\Main as Payment;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class QueueTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testQueue()
    {
        $id = Payment::orderBy('id', 'desc')->pluck('id')->first();
        dispatch(new DestroyPaymentJob($id));

        $this->assertTrue(true);
    }


    public function testJob()
    {
        Artisan::call('queue:work --stop-when-empty');

        $this->assertTrue(true);
    }
}
