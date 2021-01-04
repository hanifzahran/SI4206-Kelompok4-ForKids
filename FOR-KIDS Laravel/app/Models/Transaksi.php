<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_unik','produk','harga','user_id','foto','isEvent','status'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getHarga() {
        return "IDR ".number_format($this->harga,0,',','.');
    }

    public function getStatus() {
        $data="";
        if($this->status == "success") { 
            $data="success";
        } else if($this->status == "error") {
            $data="danger";
        } else if($this->status == "pending") { 
            $data="warning";
        }
        return $data;
    }
    
}
