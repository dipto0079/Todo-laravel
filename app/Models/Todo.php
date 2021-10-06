<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = [
        'task',
        'image',
        'user_id',
    ];

    public function  Categories(){
    return $this->belongsToMany(Category::class);
    }
}
