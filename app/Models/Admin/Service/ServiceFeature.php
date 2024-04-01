<?php

namespace App\Models\Admin\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceFeature extends Model
{
    use HasFactory;
    protected $fillable = ['service_id','feature','starter','standard','advanced'];
}
