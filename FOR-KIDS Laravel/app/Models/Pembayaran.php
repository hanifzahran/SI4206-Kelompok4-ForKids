<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','no_unik','reff','log_respon'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
