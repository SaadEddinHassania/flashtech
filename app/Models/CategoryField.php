<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryField extends Model
{

    protected $fillable=['field','type','details'];
    public function category(){
        return $this->belongsTo(Category::class);
    }


}
