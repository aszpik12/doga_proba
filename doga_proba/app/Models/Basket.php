<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'score',
        'description',
        'education_link',
        'task_link',
        'task_range_id',
    ];
}
