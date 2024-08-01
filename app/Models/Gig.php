<?php

namespace App\Models;

use App\Enums\GigStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gig extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'address_road',
        'address_suburb',
        'address_city',
        'address_region',
        'coordinates',
        'initial_price',
        'final_price',
        'status',
        'user_id',
    ];

    protected $casts = [
        'status' => GigStatus::class,
        'coordinates' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
