<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected  $primaryKey = 'item_id';

    protected $fillable = [
        'type_id',
        'date',
    ];
}
