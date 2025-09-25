<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model //<--- automatically looks for the plural 'ninjas' table
{
    protected $fillable = ['name', 'age', 'skill', 'bio']; //mass assignment protection

    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;
}
