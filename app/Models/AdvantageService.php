<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdvantageService extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'advantage_service';

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'service_id',
        'advantage',
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
