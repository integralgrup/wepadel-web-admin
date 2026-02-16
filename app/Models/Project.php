<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProjectGallery;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'project';

    protected $fillable = [
        'lang',
        'project_id',
        'title_1',
        'short_description',
        'title_2',
        'description',
        'seo_url',
        'image',
        'alt',
        'used_products',
        'country_id',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'sort',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    /**
     * Relationship: A project has many gallery items
     */
    public function gallery()
    {
        return $this->hasMany(ProjectGallery::class, 'project_id', 'project_id')->orderBy('sort');
    }

    public function country()
    {
        return $this->hasOne(Country::class, 'country_id', 'country_id')->where('lang', app()->getLocale());
    }


}