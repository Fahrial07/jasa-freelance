<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdvantageUser extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'advantage_user';

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
}
