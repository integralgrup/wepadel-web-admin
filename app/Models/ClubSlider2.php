<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Club;

class ClubSlider2 extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'club_slider_2';

    protected $fillable = [
        'slider_id',
        'club_id',
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

    // Define relationship with Club model
    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id', 'club_id');
    }

}
