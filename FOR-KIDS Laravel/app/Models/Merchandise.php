<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','price','foto'
    ];

    public function getPrice() {
        return "IDR ".number_format($this->price,0,',','.');
    }

    public function getFoto() {
        return '/img/merchandise/'.$this->foto;
    }

    

}
