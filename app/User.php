<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use TCG\Voyager\Traits\VoyagerUser;


class User extends Authenticatable
{
    use VoyagerUser;

    protected $guarded = [];

    /**
     * On save make sure to set the default avatar if image is not set.
     */
    public function save(array $options = [])
    {
        // If no avatar has been set, set it to the default
        if (!$this->avatar) {
            $this->avatar = 'users/default.png';
        }

        parent::save();
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('F jS, Y h:i A');
    }

    public function setCreatedAtAttribute($value)
    {
        $this->attributes['created_at'] = Carbon::parse($value)->format('Y-m-d H:i:s');
    }
}
