<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * php artisan db:seed --class=CoursesTableSeeder
     *
     * $table->string('name', 100);
     * $table->string('bengali_name', 100);
     * $table->text('objective');
     * $table->text('description');
     * $table->string('code',3)->unique();
     * @return void
     */
    public function run()
    {

        DB::table('courses')->insert([
        'name' => str_random(10),
        'bengali_name' => str_random(15),
        'objective' => str_random(20),
        'description' => str_random(50),
        'code' => mt_rand(100,900),
        'created_at' => new DateTime,
        'updated_at' => new DateTime]);

    }
}
