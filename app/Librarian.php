<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Librarian extends Model
{
    protected $fillable = [
        'user', 'library'
    ];
}
