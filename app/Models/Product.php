<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class Product extends Model
{

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function category_id(){
        return $this->belongsTo(Category::class);
    }

    public function fields(){
        $category = $this->category->parent_id==null?$this->category:$this->category->parent;
        return $category->fields();
    }

    public function valuesList(){

        return $this->values()->with('field')->get()->pluck('value','field.field');
//        $fields = $this->fields->sortBy('id')->pluck('field');
//        $values = $this->values->sortBy('field_id')->pluck('value');
//
//        $fields= $fields->combine($values);
//
//        return $fields;
    }
    public function values(){
        return $this->hasMany(ProductValue::class);
    }
}
