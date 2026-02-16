<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Project;

class ProjectGallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'project_gallery';

    protected $fillable = [
        'project_id',
        'image_id',
        'lang',
        'image',
        'alt',
        'sort',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    /**
     * Relationship: A gallery item belongs to a project
     */
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }
}
