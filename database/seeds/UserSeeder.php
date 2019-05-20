<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
	    'name' => 'Bruno Gomes de Araujo',
	    'cpf' => '11111111111',
	    'email' => 'bruno@email.com',
	    'celular' => '999999999',
	    'apelido' => 'Bruno Gomes',
	    'matricula' => '12345',
	    'password' => bcrypt('123456')
	    ]);

		DB::table('users')->insert([
	    'name' => 'Coordenador',
	    'cpf' => '11111111111',
	    'email' => 'coordenador@email.com',
	    'celular' => '999999999',
	    'apelido' => 'Admin',
	    'matricula' => '12345',
	    'is_coordenador' => 1,
	    'password' => bcrypt('123456')
	    ]);

    }
}
