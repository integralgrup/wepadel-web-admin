<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product_category';

    protected $fillable = [
        'parent_category_id',
        'category_id',
        'title',
        'description',
        'image',
        'alt',
        'seo_url',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'lang',
        'sort'
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    // Define relationship with Product model
    public function product()
    {
        return $this->hasMany(Product::class, 'category_id', 'category_id')->where('lang', app()->getLocale())->orderBy('sort', 'asc');
    }

    public function children()
    {
        return $this->hasMany(ProductCategory::class, 'parent_category_id', 'category_id')->where('lang', app()->getLocale())->orderBy('sort', 'asc');
    }

}
