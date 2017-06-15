<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'career';

    protected $fillable = [
        'name', 'email', 'phone','applyingfor', 'experience', 'salary', 'comments', 'resume'
    ];
}
