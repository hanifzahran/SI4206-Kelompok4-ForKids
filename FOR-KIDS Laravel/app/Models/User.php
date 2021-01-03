<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'isAdmin',
        'isParent',
        'isChild'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRole() {
        $level = '';
        if($this->isAdmin == 1)
            $level = "Admin";
        else if($this->isParent == 1)
            $level = "Orang Tua";
        else 
            $level = "Anak";
        return $level;
    }


    public function transaksi() {
        return $this->hashMany(Transaksi::class);
    }

    public function event_detail() {
        return $this->hashMany(Event_detail::class);
    }

    public function competition_detail() {
        return $this->hashMany(Competition_detail::class);
    }

    public function pembayaran() {
        return $this->hasMany(Pembayaran::class);
    }

    public function activitychild() {
        return $this->hasMany(ActivityChild::class);
    }
    


}
