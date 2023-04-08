<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Products;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category'
    ];

    public function products()
    {
        return $this->hasManyThrough(Product::class, Category::class, 'category_id');
    }

    public function oxfords()
    {
        return $this->hasManyThrough(Product::class, Category::class, 'category_id');
    }
}
