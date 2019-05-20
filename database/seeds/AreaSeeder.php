<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert(['nome' => 'Informática']);
		DB::table('areas')->insert(['nome' => 'Eventos']);
		DB::table('areas')->insert(['nome' => 'Eletromecânica']);
    }
}
