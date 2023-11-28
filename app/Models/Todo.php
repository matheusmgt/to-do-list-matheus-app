<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Todo extends Model
{
    protected $fillable = ['description', 'has_done'];
    
}
