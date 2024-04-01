<?php

namespace App\Models\Admin\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePackage extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'starter_price',
        'starter_deliver_time',
        'starter_short_description',
        'starter_full_description',
        'starter_url',
        'standard_price',
        'standard_deliver_time',
        'standard_short_description',
        'standard_full_description',
        'standard_url',
        'advance_price',
        'advance_deliver_time',
        'advance_short_description',
        'advance_full_description',
        'advance_url'
    ];
}
