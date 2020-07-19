<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $quarded = [];
    protected $fillable = ['tag_name', 'created_at', 'updated_at'];
}
