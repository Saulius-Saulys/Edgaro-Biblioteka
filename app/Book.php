<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    const TAKEN = 'taken';
    const AVAILABLE = 'available';

    protected $fillable = [
        'user', 'status', 'reservationTime', 'library', 'user'
    ];
}
