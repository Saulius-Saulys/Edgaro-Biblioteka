<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    const CASUAL_USER = 'casualUser';
    const ADMIN = 'admin';
    const LIBRARIAN = 'librarian';

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var null|string
     */
    private $role;

    /**
     * @var null|string
     */
    private $bio;

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
