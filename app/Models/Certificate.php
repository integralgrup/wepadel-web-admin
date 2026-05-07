<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate extends Model
{
    protected $table = 'certificate';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'certificate_id',
        'lang',
        'title',
        'url',
        'pdf_file',
        'sort',
    ];

    // If you want to automatically cast created_at as datetime
    protected $dates = [
        'created_at',
        'deleted_at',
    ];

}
