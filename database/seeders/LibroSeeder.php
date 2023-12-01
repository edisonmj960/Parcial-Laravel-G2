<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'ISBN' => '10',
                'nombre' => 'Meditaciones',
                'descripcion' => 'Obra literaria que cuenta las vivencias del 
                emperador romano marco aurelio',
                'generoLiterario' => 'No-Ficcion',
                'precioUnitario' => 100.000,
                'observacion' => 'Buen Estado',
                'Foto' => 'medi.jpg',
                'area' => '1'
            ],

            [
                'ISBN' => '20',
                'nombre' => 'En el Filo de la Navaja',
                'descripcion' => 'Obra literaria que cuenta las vivencias de Yolanda
                Ruiz ',
                'generoLiterario' => 'Biografia',
                'precioUnitario' => 70.000,
                'observacion' => 'Buen Estado',
                'Foto' => 'filo.jpg',
                'area' => '2'
            ],

            [
                'ISBN' => '30',
                'nombre' => 'Entender la politíca: Una guía para novatos',
                'descripcion' => 'Una guía de política para principiantes Por compleja o 
                impenetrable que pueda parecer, no podemos escapar de ella.',
                'generoLiterario' => 'Ensayo',
                'precioUnitario' => 120.000,
                'observacion' => 'Buen Estado',
                'Foto' => 'poli.jpg',
                'area' => '3'
            ],

            [
                'ISBN' => '40',
                'nombre' => 'Introducción Al Derecho',
                'descripcion' => 'Libro para Estudiantes de Primer Semestre',
                'generoLiterario' => 'Ensayo',
                'precioUnitario' => 90.000,
                'observacion' => 'Buen Estado',
                'Foto' => 'dere.jpg',
                'area' => '4'
            ],

            [
                'ISBN' => '50',
                'nombre' => 'El Libro del Arte',
                'descripcion' => 'El libro del arte desbroza la jerga de la historia
                 y la teoría del arte 
                y ofrece imágenes de las mayores obras de arte del mundo',
                'generoLiterario' => 'Historia',
                'precioUnitario' => 150.000,
                'observacion' => 'Buen Estado',
                'Foto' => 'arte.jpg',
                'area' => '5'
            ]

 
        ];
        DB::table('libro')->insert($datos);
    }
}
