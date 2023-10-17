<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = "resrvation";
    protected $fillable = [
        'name' ,'last_name', 'email', 'phone', 'message'
    ];

    use HasFactory;
}
