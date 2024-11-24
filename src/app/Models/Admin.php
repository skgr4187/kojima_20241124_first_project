<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins';

    protected $guarded = ['user_id','name','work_start',];

    protected $fillable = [
        'work_fin',
        'break_time',
        'work_time',
        'created_at',
        'updated_at',
    ];
}
