<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SexosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sexos')->insert(
            [
                [
                    'cod_sexo' => 'M',
                    'desc_sexo' => 'Masculino',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'cod_sexo' => 'F',
                    'desc_sexo' => 'Feminino',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            ]
        );
    }
}
