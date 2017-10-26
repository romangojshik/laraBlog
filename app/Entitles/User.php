<?php

namespace App\Entitles;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";
    protected $primaryKey = "id";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
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

    protected $casts = [
        'id'                => 'integer',
        'email'             => 'string',
        'password'          => 'string',
        'isAdmin'           => 'boolean',
        'remember_token'    => 'string',
        'create_at'         => 'datetime',
        'update_at'         => 'datetime'
    ];

    protected $dates = [
        'create_at',
        'update_at'
    ];
}
