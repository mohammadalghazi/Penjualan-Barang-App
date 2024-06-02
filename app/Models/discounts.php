<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discounts extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'rules',
        'amount',
        'max_amount',
        'availability',
        'is_global',
        'started_at',
        'expired_at',
        'archived_at',
        'deleted_at',
    ];

    protected $table = 'discounts';

    protected $casts = [
       'started_at' => 'datetime',
       'expired_at' => 'datetime',
       'archived_at' => 'datetime',
       'deleted_at' => 'datetime',
    ];
}
