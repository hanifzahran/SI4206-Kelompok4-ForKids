<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','category','link','foto'
    ];

    public function getFoto() {
        return '/assets/Education Video.png';
    }
}