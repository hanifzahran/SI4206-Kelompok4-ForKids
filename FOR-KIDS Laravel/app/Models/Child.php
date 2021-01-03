<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','parent_child_id','tanggal_lahir','alamat','hp'
    ];


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function parent_child() {
        return $this->belongsTo(ParentChild::class);
    }

    public function umur() {
        return date('Y')-date_format(date_create($this->tanggal_lahir),'Y');
    }
}
