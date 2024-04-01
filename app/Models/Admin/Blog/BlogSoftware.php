<?php

namespace App\Models\Admin\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogSoftware extends Model
{
    use HasFactory;
    protected $fillable = ['blog_id','software_id'];
}
