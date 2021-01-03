<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentChild extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','tanggal_lahir','alamat','hp','umur'
    ];


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function child() {
        return $this->haMany(Child::class);
    }


}
