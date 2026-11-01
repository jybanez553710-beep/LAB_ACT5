<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Add this line
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; // Ensure this is inside the class

    protected $fillable = ['title', 'body'];
}