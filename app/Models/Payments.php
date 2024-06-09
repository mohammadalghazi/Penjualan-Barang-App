<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'archived_at',
        'deleted_at',
    ];
    protected $table = 'payments';
}
