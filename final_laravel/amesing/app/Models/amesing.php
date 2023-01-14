<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amesing extends Model
{
    protected $fillable = [
        'name',
        'email',
        'age',
        'address'
    ];
    use HasFactory;
}
