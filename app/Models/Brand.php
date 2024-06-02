<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'description',
        'image',
        'archived_at',
        'deleted_at',
    ];
}
