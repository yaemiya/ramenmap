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
            [
                'name' => 'ぱぱ',
                'email' => 'ya.ay110177@gmail.com',
                'password' => '110177ay',
            ],
            [
                'name' => 'まま',
                'email' => 'mama@gamail.com',
                'password' => 'mama2222',
            ],
            [
                'name' => 'おじいちゃん',
                'email' => 'jiji@gmail.com',
                'password' => 'jiji3333',
            ],
            [
                'name' => 'おばあちゃん',
                'email' => 'baba@gmail.com',
                'password' => 'baba4444',
            ]
        ]);
    }
}
