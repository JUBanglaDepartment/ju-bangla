<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * php artisan db:seed --class=StudentsTableSeeder
     *
     * $table->increments('id')->unsigned()->unique();
     * $table->string('name',20);
     * $table->string('year',4)->default('2017');
     * $table->string('email',50)->unique();
     * $table->string('password',50);
     * $table->string('registrationid',5)->default('00000');
     * $table->string('classroll',4)->default('0000');
     * $table->string('hall',2)->default('00');
     * $table->softDeletes();
     * $table->timestamps();
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => str_random(20),
            'year' => mt_rand(1990, 2020),
            'email'=> str_random(30).'@mail.com',
            'password' => bcrypt('secret_pass'),
            'registrationid' => mt_rand(10000, 20000),
            'classroll' => mt_rand(1000, 2000),
            'hall' => mt_rand(10, 99),
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

    }
}
