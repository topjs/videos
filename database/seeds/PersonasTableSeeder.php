<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'nombre' => 'rafael',
            'tipo_documento' => 'DNI',
            'num_documento' => '45124548',
            'direccion' => 'test',
            'email' => 'use@email.com'

        ]);
        DB::table('personas')->insert([
            'nombre' => 'daniela',
            'tipo_documento' => 'DNI',
            'num_documento' => '45124545',
            'direccion' => 'test',
            'email' => 'user@email.com'
        ]);
        DB::table('personas')->insert([
            'nombre' => 'todos',
            'tipo_documento' => 'DNI',
            'num_documento' => '45114545',
            'direccion' => 'test',
            'email' => 'use@email.com'
        ]);
        DB::table('personas')->insert([
            'nombre' => 'laboral',
            'tipo_documento' => 'DNI',
            'num_documento' => '456',
            'direccion' => 'test',
            'email' => 'a@email.com'
        ]);
        DB::table('personas')->insert([
            'nombre' => 'abc',
            'tipo_documento' => 'DNI',
            'num_documento' => '123',
            'direccion' => 'test',
            'email' => 'u@email.com'
        ]);
        DB::table('personas')->insert([
            'nombre' => 'ambiental',
            'tipo_documento' => 'DNI',
            'num_documento' => '789',
            'direccion' => 'test',
            'email' => 'us@email.com'
        ]);
        
    }
}
