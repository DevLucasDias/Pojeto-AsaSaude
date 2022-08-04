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
            // Nome será 'Admin'
            'name' => 'Admin',
            // ==
            'cpf' => '111.000.000-11',
            
            // senha: admin encriptada
            'password' => bcrypt('admin')
        ]);
    }
}
