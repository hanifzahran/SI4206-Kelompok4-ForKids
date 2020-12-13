<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','price','description','img_path','stok','slug'
    ];

    public function getImage() {
        return '/img-product/'.$this->img_path;
    }

    public function getPrice() {
        return 'IDR '.number_format($this->price,0,',','.');
    }

    public function order() {
        return $this->hasMany(Order::class);
    }
    
}
