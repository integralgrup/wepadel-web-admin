<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Club;

class ClubFaq extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'club_faq';

    protected $fillable = [
        'club_id',
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

    // Define relationship with Club model
    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id', 'id');
    }

}
