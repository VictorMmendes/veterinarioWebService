<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animal_models')->insert([
            'nome' => 'victor',
            'especie' => 'cachorro',
            'raca' => 'poodle',
            'peso' => 23.7,
            'nascimento' => '20/03/1945',
            'porte' => 'M',
        ]);
    }
}
