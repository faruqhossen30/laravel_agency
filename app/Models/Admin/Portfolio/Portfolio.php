<?php

namespace App\Models\Admin\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','thumbnail','video','user_id','category_id', 'edit_user_id','status'];

    public function images()
    {
        return $this->hasMany(PortfolioImage::class);
    }
}
