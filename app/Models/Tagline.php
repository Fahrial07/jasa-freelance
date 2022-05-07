<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tagline extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'tagline';

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'service_id',
        'tagline',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    //one to many
    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'service_id', 'id');
    }
}
