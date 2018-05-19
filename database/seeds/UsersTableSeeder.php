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
        for ($i = 0; $i<10; $i++){
            DB::table('users')->insert([
                'alumna_id' => $i+1,
                'email' => 'usr'.str_random(3).$i.'@gmail.com',
                "username" => str_random(10).$i,
                'password' => bcrypt('secreta')
            ]);
        }
    }
}
