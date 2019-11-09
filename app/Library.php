<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $fillable = [
        'name', 'location', 'user'
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
