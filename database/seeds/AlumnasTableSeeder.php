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
        
            DB::table('alumnas')->insert([
                'id' => 1,
                "nombre" => 'erika',
                "aPaterno" => 'vargas',
                "aMaterno" => 'alvarado',
                "direccion" => 'benito juarez 226',
                "telefono" => '4921210987',
                "fechaNacimiento" => date('Y/m/d',strtotime(str_replace('/','-','10/02/1995'))),
                "colonia" => 'privada las cumbres',
                "ciudad" => 'guadalupe',
                "estado" => 'zacatecas',
                "profesion" => 'estudiante',
            ]);
        
    }
}
