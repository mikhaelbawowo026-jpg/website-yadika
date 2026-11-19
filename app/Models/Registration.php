<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_number',
        'full_name',
        'address',
        'origin_school',
        'gender',
        'birth_place',
        'birth_date',
        'selected_major',
        'status',
    ];
}