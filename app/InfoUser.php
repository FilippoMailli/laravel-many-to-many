<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    protected $fillable = [
        'user_id',
        'bio',
        'linkedin',
        'twitter',
        'facebook',
        'path_phote'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
