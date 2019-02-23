<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class relation_user_course_lists extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id_course','id_user'
    ];
    
}
