<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function galaries(){
        return $this->hasMany('App\Gallery', 'category_id');
    }
}
