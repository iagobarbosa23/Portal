<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Administrador',
                    'email' => 'adm@unime.com.br',
                    'password' => bcrypt('123456'),
                    'cpf' => '111.111.111-11',
                    'matricula' => '111111111',
                    'telefone' => '(71) 99261-2552',
                    'codigo_orgao' => '09',
                    'ativo' => 'S',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
               
                ],

            ]   
    );
    }
}
