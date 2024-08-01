<?php

namespace App\Models;

use App\Enums\BizType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Biz extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillables = [
        'name',
        'description',
        'type',
        'city',
        'phone',
        'address',
        'coordinates'
    ];

    protected $casts = [
        'type' => BizType::class,
        'coordinates' => 'array'
    ];

}
