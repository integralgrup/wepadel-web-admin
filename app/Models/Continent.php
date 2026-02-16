<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Country;

class Continent extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'continent';

    protected $fillable = [
        'lang',
        'continent_id',
        'title',
        'seo_url',
        'class',
        'sort',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function countries()
    {
        return $this->hasMany(Country::class, 'continent_id', 'continent_id')->where('lang', app()->getLocale());
    }
}
    