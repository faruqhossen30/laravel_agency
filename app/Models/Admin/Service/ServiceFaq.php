<?php

namespace App\Models\Admin\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceFaq extends Model
{
    use HasFactory;
    protected $fillable = ['service_id','question','answer'];
}
