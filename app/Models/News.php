<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function translations()
    {
        return $this->morphMany(Translation::class, 'translationable');
    }
}
