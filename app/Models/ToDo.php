<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    use HasFactory;

    protected $table = 'to_dos'; // matches your migration table

    protected $fillable = [
        'content',
        'priority',
        'completed',
    ];
}

