<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{

    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'othername',
        'email',
        'password',
        'phone_number',
];

}
