<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ThumbnailService extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'thumbnail_service';

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'service_id',
        'thumbnail',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
