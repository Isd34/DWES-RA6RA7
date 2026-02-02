<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks'; // opcional si se llama tasks
    protected $fillable = ['title', 'description'];
}
