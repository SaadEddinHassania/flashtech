<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductValue extends Model
{
    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function field(){
        return $this->belongsTo(CategoryField::class);
    }
}
