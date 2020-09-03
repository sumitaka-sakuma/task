<?php

use Illuminate\Database\Seeder;

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
            ['name' => '佐久間',
            'email'=> 'sakuma@gmail.com',
            'password' => Hash::make('password')
            ],[
            'name' => 'smith',
            'email'=> 'smith@gmail.com',
            'password' => Hash::make('password')
            ],[
            'name' => 'Jackson',
            'email'=> 'jackson@gmail.com',
            'password' => Hash::make('password')
            ]
        ]);
    }
}
