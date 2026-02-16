<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ClubSlider1;
use App\Models\ClubSlider2;
use App\Models\ClubSlider3;
use App\Models\ClubFeatures;
use App\Models\ClubFaq;


class Club extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'club';

    protected $fillable = [
        'club_id',
        'lang',
        'title',
        'image',
        'alt',
        'seo_url',
        'title_1',
        'title_2',
        'button_text',
        'pdf_button_text',
        'pdf_file',
        'description_1',
        'description_2',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'sort'
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    // Define relationship with ClubSlider1 model
    public function sliders1()
    {
        return $this->hasMany(ClubSlider1::class, 'club_id', 'club_id')->where('lang', app()->getLocale());
    }
    // Define relationship with ClubSlider2 model
    public function sliders2()
    {
        return $this->hasMany(ClubSlider2::class, 'club_id', 'club_id')->where('lang', app()->getLocale());
    }
    // Define relationship with ClubSlider3 model
    public function sliders3()
    {
        return $this->hasMany(ClubSlider3::class, 'club_id', 'club_id')->where('lang', app()->getLocale());
    }
    // Define relationship with ClubFeatures model
    public function features()
    {
        return $this->hasMany(ClubFeatures::class, 'club_id', 'club_id')->where('lang', app()->getLocale());
    }
    // Define relationship with ClubFaq model
    public function faqs()
    {
        return $this->hasMany(ClubFaq::class, 'club_id', 'club_id')->where('lang', app()->getLocale());
    }

}
