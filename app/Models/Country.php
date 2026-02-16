<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Continent;

class Country extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'country';

    protected $fillable = [
        'lang',
        'country_id',
        'continent_id',
        'code',
        'title',
        'left',
        'top',
        'sort',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function continent()
    {
        return $this->hasOne(Continent::class, 'continent_id', 'continent_id')->where('lang', app()->getLocale());
    }
    public function getContinentTitleAttribute()
    {
        return $this->continent ? $this->continent->title : null;
    }
}
    