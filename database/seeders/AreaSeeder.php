<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'idArea' => '1',
                'descripcion' => 'Ciencias Humanas'
            ],
            [
                'idArea' => '2',
                'descripcion' => 'Ciencias Sociales'
            ], 
            [
                'idArea' => '3',
                'descripcion' => 'Ciencias Humanas'
            ],
            [
                'idArea' => '4',
                'descripcion' => 'Ciencias Juridicas'
            ],
            [
                'idArea' => '5',
                'descripcion' => 'Arte'
            ]
        ];
        DB::table('area')->insert($datos);
    }
}
