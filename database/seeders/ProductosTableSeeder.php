<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
                'producto' => 'coca-cola',
                'descripcion'=>'coca-cola 600ml',
                'precio' => 18.5,
                'existencias' => 150,
                'fotografia'=> 'coca.jpg',
                'tasa_iva' => 16,
        ]
    ]);
            }
}
