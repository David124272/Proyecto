<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->products();
        $this->files();
        $this->product_file();
    }

    private function product_file()
    {
        DB::table('product_file')->insert(['product_id' => 1, 'file_id' => 1]);
        DB::table('product_file')->insert(['product_id' => 2, 'file_id' => 2]);
        DB::table('product_file')->insert(['product_id' => 3, 'file_id' => 3]);
        DB::table('product_file')->insert(['product_id' => 4, 'file_id' => 4]);
        DB::table('product_file')->insert(['product_id' => 5, 'file_id' => 5]);
        DB::table('product_file')->insert(['product_id' => 6, 'file_id' => 6]);
        DB::table('product_file')->insert(['product_id' => 7, 'file_id' => 7]);
        DB::table('product_file')->insert(['product_id' => 8, 'file_id' => 8]);
        DB::table('product_file')->insert(['product_id' => 9, 'file_id' => 9]);
        DB::table('product_file')->insert(['product_id' => 10, 'file_id' => 10]);
        DB::table('product_file')->insert(['product_id' => 11, 'file_id' => 11]);
        DB::table('product_file')->insert(['product_id' => 12, 'file_id' => 12]);
    }

    private function files()
    {
        DB::table('files')->insert(['name' => '1.jpg', 'route' => '1.jpg', 'mime' => 'image/jpg']);
        DB::table('files')->insert(['name' => '2.jpg', 'route' => '2.jpg', 'mime' => 'image/jpg']);
        DB::table('files')->insert(['name' => '3.jpg', 'route' => '3.jpg', 'mime' => 'image/jpg']);
        DB::table('files')->insert(['name' => '4.jpg', 'route' => '4.jpg', 'mime' => 'image/jpg']);
        DB::table('files')->insert(['name' => '5.jpg', 'route' => '5.jpg', 'mime' => 'image/jpg']);
        DB::table('files')->insert(['name' => '6.jpg', 'route' => '6.jpg', 'mime' => 'image/jpg']);
        DB::table('files')->insert(['name' => '7.jpg', 'route' => '7.jpg', 'mime' => 'image/jpg']);
        DB::table('files')->insert(['name' => '8.jpg', 'route' => '8.jpg', 'mime' => 'image/jpg']);
        DB::table('files')->insert(['name' => '9.jpg', 'route' => '9.jpg', 'mime' => 'image/jpg']);
        DB::table('files')->insert(['name' => '10.jpg', 'route' => '10.jpg', 'mime' => 'image/jpg']);
        DB::table('files')->insert(['name' => '11.jpg', 'route' => '11.jpg', 'mime' => 'image/jpg']);
        DB::table('files')->insert(['name' => '12.jpg', 'route' => '12.jpg', 'mime' => 'image/jpg']);
    }

    private function products()
    {
        DB::table('products')->insert([
            'name' => 'Jeans Slim Hombre C2c Mezclilla C&a M??s Sustentable 3005963',
            'total' => 699,
            'description' => 'Pantal??n de mezclilla slim color azul oscuro de hombre efecto lavado, es un 5 bolsillos con cierre cubierto por tapeta y bot??n metalizado, su mezclilla es c2c, m??s sustentable

            Cuidado de la prenda:
            
            Composici??n: ELASTANO 1%,ALGOD??N 99%',
            'category_id' => 1,
            //'discount' => 0,
            'quantity' => 50,
            'status' => 1,
            'stars' => 3
        ]);

        DB::table('products')->insert([
            'name' => 'Playera C2c Algod??n M??s Sustentable De Hombre C&a (3009948)',
            'total' => 149,
            'description' => 'Playera manga corta color olivo de hombre cuello redondo fit regular y hecha con algod??n m??s sustentable

            Largo: Talla M 74 cm ( Estos datos se obtuvieron de la medici??n manual del producto, las mediciones pueden variar de 2 a 3 CM.)
            
            Composici??n: ALGOD??N 100%
            
            Cuidado de la prenda:',
            'category_id' => 1,
            //'discount' => 0,
            'quantity' => 50,
            'status' => 1,
            'stars' => 4
        ]);

        DB::table('products')->insert([
            'name' => 'Cazadora Estilo Bomber Tipo Piel De Hombre C&a (3009686)',
            'total' => 549,
            'description' => 'Cazadora estilo bomber color negro de hombre fit slim con 2 bolsillos frontales, con resorte en pu??os y bajo, de material. Hecho de material tipo piel.
            
            Composici??n: POLIAMIDA/NYLON 100%
            
            Cuidado de la prenda:',
            'category_id' => 1,
            //'discount' => 0,
            'quantity' => 50,
            'status' => 1,
            'stars' => 5
        ]);

        DB::table('products')->insert([
            'name' => 'Sneakers De Hombre C&a (3011731)',
            'total' => 299,
            'description' => 'Tenis color azul marino de hombre casual estilo street, suela corrida corte sint??tico, horma redonda forro textil suela sint??tica.

            Composici??n:
            
            Cuidado de la prenda:',
            'category_id' => 3,
            //'discount' => 0,
            'quantity' => 50,
            'status' => 1,
            'stars' => 5
        ]);

        DB::table('products')->insert([
            'name' => 'Botin Estilo Chelsea De Hombre Casual C&a (3018024)',
            'total' => 699,
            'description' => 'Botas de hombre casual estilo chelsea plain toe color tabaco corte sint??tico horma redonda forro sint??tico suela sint??tica.

            Composici??n: BOVINO 80%,PLASTICO 10%,SINTETICO 10%
            
            Cuidado de la prenda:',
            'category_id' => 3,
            //'discount' => 0,
            'quantity' => 50,
            'status' => 1,
            'stars' => 5
        ]);

        DB::table('products')->insert([
            'name' => 'Playera Ranglan C2c Algod??n M??s Sustentable Dama C&a 3009955',
            'total' => 199,
            'description' => 'Playera manga corta color blanco de mujer cuello redondo manga ranglan con nudo al frente y mangas negras en contraste, playera c2c con algod??n m??s sustentable

            Largo: Talla M 55 cm ( Estos datos se obtuvieron de la medici??n manual del producto, las mediciones pueden variar de 1-2 CM.)
            
            Composici??n: ALGOD??N 100%',
            'category_id' => 2,
            //'discount' => 0,
            'quantity' => 50,
            'status' => 1,
            'stars' => 5
        ]);

        DB::table('products')->insert([
            'name' => 'Playera Manga Corta De Mujer C&a (3001553)',
            'total' => 99,
            'description' => 'Playera manga corta estilo drop shoulder color blanco de mujer cuello redondo estampada al frente.

            Composici??n: POLI??STER 50%,ALGODON BCI 50%
            
            Cuidado de la prenda:',
            'category_id' => 2,
            //'discount' => 0,
            'quantity' => 50,
            'status' => 1,
            'stars' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Tenis Estilo Street De Mujer C&a (3018654)',
            'total' => 399,
            'description' => 'Tenis color blanco de mujer casual estilo street, suela plano corte sint??tico, horma redonda forro textil suela sint??tica exclusivo venta online.

            Composici??n:
            
            Cuidado de la prenda:',
            'category_id' => 4,
            //'discount' => 0,
            'quantity' => 99,
            'status' => 1,
            'stars' => 4
        ]);

        DB::table('products')->insert([
            'name' => 'Botin Estilo Hiking De Mujer Casual C&a (3018016)',
            'total' => 499,
            'description' => 'Botas de mujer casual estilo hiking con agujetas color negro corte sint??tico horma oval forro textil suela sint??tica.

            Composici??n: CORTE SINTETICO 80%,FORRO TEXTIL 10%,SUELA SINTETICA 10%
            
            Cuidado de la prenda:',
            'category_id' => 4,
            //'discount' => 0,
            'quantity' => 50,
            'status' => 1,
            'stars' => 5
        ]);

        DB::table('products')->insert([
            'name' => 'Playera Manga Corta Dia De La Madre De Ni??o C&a (3012465)',
            'total' => 89,
            'description' => 'Playera Manga Corta Color Cafe Claro De Ni??o

            Composici??n: ALGODON BCI 100%
            
            Cuidado de la prenda:',
            'category_id' => 5,
            //'discount' => 0,
            'quantity' => 39,
            'status' => 1,
            'stars' => 4
        ]);

        DB::table('products')->insert([
            'name' => 'Bota Estampado Unicornio De Ni??a C&a (3004953)',
            'total' => 349,
            'description' => 'Botas de ni??a color rosa corte sint??tico, horma redonda forro textil suela sint??tica con print de unicornio con jaretas laterales con altura de ca??a abajo de la rodilla.

            Composici??n: TEXTIL 10%
            
            Cuidado de la prenda:',
            'category_id' => 6,
            //'discount' => 0,
            'quantity' => 69,
            'status' => 1,
            'stars' => 2
        ]);

        DB::table('products')->insert([
            'name' => 'Gorra New Era Dallas Cowboys C&a (3014978)',
            'total' => 298,
            'description' => 'Gorra ajustable color azul marino de hombre, estilo base ball material textil,, equipo Dallas Cowboys NFL.

            Composici??n: ALGOD??N CONVENCIONAL 35%,POLI??STER 65%
            
            Cuidado de la prenda:',
            'category_id' => 7,
            //'discount' => 0,
            'quantity' => 30,
            'status' => 1,
            'stars' => 4
        ]);
    }
}
