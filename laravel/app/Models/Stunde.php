<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stunde extends Model
{
    use HasFactory;

    protected $fillable = [
        'kosten',
        'datum',
        'von',
        'bis',
        'fachId',
        'userId'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function fach(){
        return $this->hasOne(Fach::class);
    }
    
}
