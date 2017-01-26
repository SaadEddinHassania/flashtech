<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function parent(){
        return $this->belongsTo(Category::class);
    }

    public function parent_id(){
        return $this->belongsTo(Category::class);
    }

    public function children(){
        return $this->hasMany(Category::class,'parent_id');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function allProducts(){
        return $this->hasManyThrough(Product::class,Category::class,'parent_id');
    }

    public function fields(){
        return $this->hasMany(CategoryField::class);
    }

}
