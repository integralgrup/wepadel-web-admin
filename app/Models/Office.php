<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Office extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'office';

    protected $fillable = [
        'office_id',
        'lang',
        'title',
        'address',
        'phone',
        'email',
        'lat',
        'longitude',
        'map_url',
        'sort',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];
}
