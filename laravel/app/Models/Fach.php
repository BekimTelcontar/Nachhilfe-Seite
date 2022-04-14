<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fach extends Model
{
    use HasFactory;

    protected $fillable = [
        'fachname'
    ];
}
