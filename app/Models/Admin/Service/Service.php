<?php

namespace App\Models\Admin\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
         'title',
         'slug',
         'description',
         'thumbnail',
         'video',
         'category_id',
         'user_id',
         'status',
         'meta_title',
         'meta_description',
         'meta_keyword'
        ];
}
