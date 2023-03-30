<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'info';
    protected $fillable = [
        'user_id', 'phone', 'profile_image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
