<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tweet;
use App\User;

class Like extends Model
{
    protected $guarded = [];

    public function tweet()
    {
        return $this->belongsTo(Tweet::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
