<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    // protected $column = 'category_id';
   protected $primaryKey = 'category_id';
    public function news()
    {
    return $this->hasMany('App\News');
    }
    
}
