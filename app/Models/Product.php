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

    protected $casts = [
        'size' => 'array',
        'expired_at' => 'datetime',
        'archived_at' => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }
}
