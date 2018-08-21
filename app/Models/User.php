<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = [
        'json_data' => 'array',
    ];

    public function dataItems() {
        return $this->hasMany(DataItem::class, 'user_id', 'id')
                    ->orderBy('created_at', 'desc')
        ;
    }
}
