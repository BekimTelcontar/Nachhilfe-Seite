<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'benutzername',
        'passwort',
        'email',
        'profilbild'
    ];

    public function stunde(){
        return $this->belongsToMany(Stunde::class);
    }
}
