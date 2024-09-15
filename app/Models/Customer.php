<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CUstomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'nama',
        'alamat',
        'status',
    ];
}
