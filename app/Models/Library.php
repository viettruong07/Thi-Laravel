<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $table = 'library';
    protected $fillable = ['bookid', 'authorid', 'title', 'ISBN', 'pub_year', 'available'];
    use HasFactory;
}
