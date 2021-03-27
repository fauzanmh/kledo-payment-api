<?php

namespace Database\Seeders;

use App\Models\Payments\Main;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Main::factory(10)->create();
    }
}
