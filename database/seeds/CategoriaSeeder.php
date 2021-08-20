<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_receta')->insert([
            'nombre' => 'Comida Mexicana',
            'created_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('categoria_receta')->insert([
            'nombre' => 'Comida Argentina',
            'created_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('categoria_receta')->insert([
            'nombre' => 'Postres',
            'created_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('categoria_receta')->insert([
            'nombre' => 'Cortes de Carne',
            'created_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('categoria_receta')->insert([
            'nombre' => 'Desayunos',
            'created_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('categoria_receta')->insert([
            'nombre' => 'Ensaladas',
            'created_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
