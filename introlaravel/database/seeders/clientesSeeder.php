<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Juan',
                'apellido'=>'Perex'
                'correo'=>'Juan@gmail.com'
                'telefono'=>'+1237894560'
            ],[
                'nombre'=>'Andrea',
                'apellido'=>'Arredondo'
                'correo'=>'Andrea@gmail.com'
                'telefono'=>'+1287854560'
            ],[
                'nombre'=>'Moises',
                'apellido'=>'Becerril'
                'correo'=>'Moises@gmail.com'
                'telefono'=>'+1239994560'
            ]]);
    }
}
