<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories(){
        $this->hasMany('categories', Category::class);
    }
}
