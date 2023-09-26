<?php

namespace App\Models;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryAge extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

}
