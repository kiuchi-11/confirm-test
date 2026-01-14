<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($account) {
            $account->password = bcrypt($account->password);
        });
    }
}
