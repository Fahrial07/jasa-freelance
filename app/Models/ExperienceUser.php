<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExperienceUser extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'experience_user';

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'detail_users_id',
        'experience',
        'deleted_at',
        'created_at',
        'updated_at'

    ];
}
