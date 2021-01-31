<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'detail','des','category','public','data_pubblic','thumbs'];
}
