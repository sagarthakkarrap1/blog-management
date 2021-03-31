<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class category extends Model
{
    // public function user(){
    //     return $this->belongsTo('App\Models\User');
    // }
    public function posts()
    {
        return $this->belongsToMany('App\Models\user\post','category_posts');
    }
}
