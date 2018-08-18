<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'CRISTÓVÃO BAHIENSE DOS SANTOS',
            'rh' => 'A+',
            'cpf' => '123.456.789-01',
            'matricula' => '19030',
            'email' => 'bahiense@provedor.com',
            'password' => '$2y$12$gknOxNTzoVkwO.eTbeudD.q8bVuY.4Xv01X002f9aITcJSKexyUCm'
            ]);
        
    }
}
