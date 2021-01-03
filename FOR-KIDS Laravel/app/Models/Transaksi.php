<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_unik','produk','harga','user_id','foto','isEvent'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getHarga() {
        return "IDR ".number_format($this->harga,0,',','.');
    }
    
}
