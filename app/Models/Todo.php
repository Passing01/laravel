<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todo extends Model
{
    //
    use Hasfactory; //pour communiquer avec db
    protected $fillable = [
        'title',
        'description',
        'completed'
    ];
}
