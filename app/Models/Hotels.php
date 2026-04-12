<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
#[Fillable(['name','city','address', 'deskription', 'rating','img_url'])]

class Hotels extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'address',
        'description',
        'rating',
        'img_url',
    ];
}
