<?php

use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * php artisan db:seed --class=FacultiesTableSeeder
     *
     * $table->increments('id')->unsigned()->unique();
     * $table->string('name', 20);
     * $table->string('email', 50)->unique();
     * $table->string('password',512);
     * $table->softDeletes();
     * $table->timestamps();
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculties')->insert([
            'name' => str_random(20),
            'email'=> str_random(30).'@mail.com',
            'password' => bcrypt('secret_pass'),
            'created_at' => new DateTime ,
            'updated_at' => new DateTime]);

    }
}
