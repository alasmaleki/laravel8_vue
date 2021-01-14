<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesGuy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sales_area_postal_codes'
    ];
}