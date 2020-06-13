<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrgaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orgaos')->insert(
            [
                [
                    'codigo'=>'09',
                    'nome'=> 'SUPREV',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'codigo'=>'91',
                    'nome'=> 'Tribunal de Justiça da Bahia',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),   
                ],
                [
                    'codigo'=>'90',
                    'nome'=> 'Ministério Público da Bahia',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),  
                ],

            ]   
    );
    }
}
