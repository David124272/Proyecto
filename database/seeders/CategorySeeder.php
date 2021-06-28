<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'ROPA PARA HOMBRE', 'status' => true]);
        DB::table('categories')->insert(['name' => 'ROPA PARA MUJER', 'status' => true]);
        DB::table('categories')->insert(['name' => 'ACCESORIOS', 'status' => true]);
    }
}
