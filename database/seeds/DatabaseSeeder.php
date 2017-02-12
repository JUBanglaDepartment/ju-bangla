<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) {
            $this->call(StudentsTableSeeder::class);
            $this->call(FacultiesTableSeeder::class);
            $this->call(CoursesTableSeeder::class);
            $this->call(UsersTableSeeder::class);
        }
        $this->call(RolesTableSeeder::class);

    }
}
