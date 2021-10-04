<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;

    protected $table = 'notebook';

    protected $fillable = [
        'id',
        'company',
        'phone',
        'email',
        'birthday',
        'photo'

    ];

    protected $visible = [
        'id',
        'company',
        'phone',
        'email',
        'birthday',
        'photo'

    ];
}
