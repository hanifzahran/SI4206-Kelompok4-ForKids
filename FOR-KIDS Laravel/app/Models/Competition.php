<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto','name','type','tanggal','description'
    ];

    public function getPrice() {
        return "IDR ".number_format($this->price,0,',','.');
    }

    public function getFoto() {
        return '/img/competition/'.$this->foto;
    }

    public function getTanggal() {
        return str_replace('T',' ',$this->tanggal);
    }

}
