<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'description',
        'size',
        'stock',
        'price',
        'status',
        'category_id',
        'brand_id',
        'discount_id',
        'expired_at',
        'archived_at',
        'deleted_at',
    ];
}
