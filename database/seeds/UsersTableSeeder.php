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
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'created_at' => new DateTime ,
            'updated_at' => new DateTime]);
    }
}
