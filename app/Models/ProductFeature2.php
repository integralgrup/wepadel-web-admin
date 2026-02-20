<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;

class ProductFeature2 extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product_feature_2';

    protected $fillable = [
        'feature_id',
        'product_id',
        'lang',
        'title',
        'description',
        'image',
        'alt',
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
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}
