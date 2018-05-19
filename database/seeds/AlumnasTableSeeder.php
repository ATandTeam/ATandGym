<?php

use Illuminate\Database\Seeder;

class AlumnasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i<10; $i++){
            DB::table('alumnas')->insert([
                "nombre" => str_random(10),
                "aPaterno" => str_random(10),
                "aMaterno" => str_random(10),
                "direccion" => str_random(10),
                "telefono" => '1234567890',
                "fechaNacimiento" => date('Y/m/d',strtotime(str_replace('/','-','10/02/1995'))),
                "colonia" => str_random(10),
                "ciudad" => str_random(10),
                "estado" => str_random(10),
                "profesion" => str_random(10),
            ]);
        }
    }
}
