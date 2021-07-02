<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert(['name' => 'Efectivo', 'status' => true]);
        DB::table('payments')->insert(['name' => 'Tarjeta de débito', 'status' => true]);
        DB::table('payments')->insert(['name' => 'Tarjeta de crédito', 'status' => true]);
        DB::table('payments')->insert(['name' => 'Paypal', 'status' => true]);
    }
}
