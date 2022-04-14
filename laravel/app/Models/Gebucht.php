<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gebucht extends Model
{
    use HasFactory;

    protected $fillable = [
        'stundeId',
        'userId'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function stunde(){
        return $this->hasOne(Stunde::class);
    }
}
