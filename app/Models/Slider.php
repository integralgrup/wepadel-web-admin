<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    protected $table = 'main_slider';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'slider_id',
        'lang',
        'title',
        'description',
        'button_text',
        'button_url',
        'image',
        'alt',
        'sort',
    ];

    // If you want to automatically cast created_at as datetime
    protected $dates = [
        'created_at',
        'deleted_at',
    ];

}
