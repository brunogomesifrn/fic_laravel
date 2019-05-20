<?php

use Illuminate\Database\Seeder;

class PublicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('publicos')->insert(['nome' => 'Técnico']);
		DB::table('publicos')->insert(['nome' => 'Docente']);
		DB::table('publicos')->insert(['nome' => 'Aluno']);
		DB::table('publicos')->insert(['nome' => 'Externo']);


    }
}
