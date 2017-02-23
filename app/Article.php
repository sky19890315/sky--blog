<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //保护数据
    protected $dates = ['published'];

}
