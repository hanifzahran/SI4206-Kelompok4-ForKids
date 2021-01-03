<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'competition_id','user_id','file','nilai'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function competition() {
        return $this->belongsTo(Competition::class);
    }

    public function getFile() {
        return '/file/competition/'.$this->file;
    }

}
