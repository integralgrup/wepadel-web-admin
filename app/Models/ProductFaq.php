<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;

class ProductFaq extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product_faq';

    protected $fillable = [
        'product_id',
        'question_id',
        'lang',
        'title',
        'description',
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
