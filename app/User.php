<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    const CASUAL_USER = 'casualUser';
    const ADMIN = 'admin';
    const LIBRARIAN = 'librarian';

    protected $fillable = [
        'name', 'email', 'password', 'role', 'bio'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function library()
    {
        return $this->hasMany(Library::class);
    }
}
