<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'number',
        'status',
        'delivery_at',
        'arrived_at',
        'delivered_at',
    ];
}
