<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','description','price','tanggal'
    ];

    public function event_detail() {
        return $this->hasMany(event_detail::class);
    }

    public function getPrice() {
        return "IDR ".number_format($this->price,0,',','.');
    }

    public function getFoto() {
        return '/img/event/'.$this->foto;
    }

    public function getTanggal() {
        return str_replace('T',' ',$this->tanggal);
    }

}
