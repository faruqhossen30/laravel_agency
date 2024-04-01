<?php

namespace App\Models\Admin\Review;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rating',
        'date',
        'thumbnail',
        'review',
        'category_id',
        'review_type_id',
        'review_url',
        'user_id',
        'status'
    ];

    protected $casts = [
        'date' => 'datetime'
    ];
}
