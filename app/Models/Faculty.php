<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



/**
 *
 * This code below is for artisan to enter a new item to the table.
 * This line below has o be changed if model is changed.
 *
 * DB::table('faculties')->insert(['id' => 1, 'name' => 'New Faculty', 'email'=> 'newfaculty@mail.com', 'phone' => '0123456789'])
 *
 */
class Faculty extends Model
{
    protected $table = 'faculties';
}
