<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'todo_id',
        'users_id',
        'comment',
    ];
}
