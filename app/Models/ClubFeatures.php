<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Club;

class ClubFeatures extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'club_features';

    protected $fillable = [
        'feature_id',
        'club_id',
        'lang',
        'title',
        'description',
        'icon',
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
        return $this->belongsTo(Club::class, 'club_id', 'id');
    }

}
