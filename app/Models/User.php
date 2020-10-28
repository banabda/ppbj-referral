<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'jenis_kelamin',
        'hp',
        'instansi',
        'kota',
        'ref',
        'ref_by',
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


    public function mengundang(){
        return $this->hasMany('App\Models\User','ref_by','ref');
    }

    public function mengundang_terverifikasi(){
        return $this->hasMany('App\Models\User','ref_by','ref')->where('status_pembayaran', 1);
    }

    public function diundang(){
        return $this->hasOne('App\Models\User','ref','ref_by');
    }

    public function pembayaran(){
        return $this->hasOne('App\Models\UserPayments','user_id','id');
    }
}
