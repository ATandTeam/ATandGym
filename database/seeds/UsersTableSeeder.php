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
                'id' => 9999999,
                'email' => 'admin@admin.com',
                "username" => 'admin',
                'password' => bcrypt('zonafitness')
                ]);        
        DB::table('users')->insert([
            'alumna_id' => 1,
            'email' => 'vargasalvaradoerika@gmail.com',
            "username" => 'erika',
            'password' => bcrypt('secreta')
        ]);
        
    }
}
