<?php

namespace App\Models\Admin\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    use HasFactory;
    protected $fillable = ['portfolio_id', 'image', 'caption','video'];
}
