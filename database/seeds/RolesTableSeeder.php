<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'superuser',
            'description'=> 'This type of users have ALL permissions
                            (create, update, delete) on any data.',
            'created_at' => new DateTime ,
            'updated_at' => new DateTime]);
        DB::table('roles')->insert([
            'name' => 'admin',
            'description'=> 'This type of users have WRITE permission
                            (create, update) on any content.',
            'created_at' => new DateTime ,
            'updated_at' => new DateTime]);
        DB::table('roles')->insert([
            'name' => 'faculty',
            'description'=> 'This type of users have WRITE PERMISSIONS
                            (create, update) on some content. The permissions
                            include READ on student information
                            and WRITE on their content and student grades.',
            'created_at' => new DateTime ,
            'updated_at' => new DateTime]);
        DB::table('roles')->insert([
            'name' => 'student',
            'description'=> 'This type of users have WRITE PERMISSIONS
                            (create, update) on some content. The permissions
                            include WRITE on some information of their own and
                            READ on all own information.',
            'created_at' => new DateTime ,
            'updated_at' => new DateTime]);
        DB::table('roles')->insert([
            'name' => 'assistant',
            'description'=> 'This type of users have WRITE PERMISSIONS
                            (update) on some content. The permissions
                            include WRITE on some information of their own and
                            students and READ on all information (faculty and sudent grades).',
            'created_at' => new DateTime ,
            'updated_at' => new DateTime]);
    }
}
