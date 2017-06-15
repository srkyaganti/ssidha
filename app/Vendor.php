<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendor';

    protected $fillable = [
        'name', 'email', 'phone','pors','companytype','message'
    ];
}
