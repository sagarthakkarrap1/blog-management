<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    //use HasFactory;
    public function tags()
    {
        return $this->belongsToMany('App\Models\user\tag','post_tags')->withTimestamps();
    }
    public function categories()
    {
        return $this->belongsToMany('App\Models\user\category','category_posts')->withTimestamps();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
