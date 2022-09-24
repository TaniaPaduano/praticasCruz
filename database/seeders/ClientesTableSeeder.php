<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run()
{ 
     DB::table('clientes')->insert([
    [    
     'razon_social' => 'Coca cola',   
     'rfc'=> 'CDFGJS256798',            
     'representante' => 'Tania Hernandez',     
     'numero_celular' => '7224179126',             
     'estatus' => 'activo',        
     
     ],
     [
     'razon_social' => 'Bimbo',   
     'rfc'=> 'CDFG2JS4256494',            
     'representante' => 'Santiago Motaño',     
     'numero_celular' => '7222172126',             
     'estatus' => 'activo',        
     ],

    ]);
     
}
}
