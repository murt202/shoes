<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tb_user_register')->insert([
            'first_name' => 'Test',
            'last_name' => 'Case',
            'username' => 'testu',
            'password' => Hash::make('password'),
            'email' => 'test@gmail.com',
            'mobile' => 1111111111,
            'active' => 1            
        ]);
    }
}
