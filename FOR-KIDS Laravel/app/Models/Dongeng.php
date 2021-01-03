<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dongeng extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','description','foto'
    ];

    public function getFoto() {
        return '/img/dongeng/'.$this->foto;
    }
    

}
