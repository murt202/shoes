<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tb_admin')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('adminpass')      
        ]);
    }
}
