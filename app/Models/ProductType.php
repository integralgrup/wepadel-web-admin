<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;

class ProductType extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product_type';

    protected $fillable = [
        'product_id',
        'type_id',
        'lang',
        'image',
        'title',
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
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

}
