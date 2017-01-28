<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    public function translationable()
    {
        return $this->morphTo();
    }
}
