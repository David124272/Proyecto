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
        DB::table('categories')->insert(['name' => 'Ropa para hombres', 'status' => true]);
        DB::table('categories')->insert(['name' => 'Ropa para mujeres', 'status' => true]);
        DB::table('categories')->insert(['name' => 'Accesorios', 'status' => true]);
        DB::table('categories')->insert(['name' => 'Ofertas', 'status' => true]);
        DB::table('categories')->insert(['name' => 'Colección de invierno', 'status' => true]);
    }
}
