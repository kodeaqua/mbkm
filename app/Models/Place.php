<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'address',
        'contact',
        'additional_description',
        'village_id',
        'latitude',
        'longitude',
        'is_village_mascot',
        'has_online_store',
        'has_smart_payment_support',
        'deleted'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }
}
