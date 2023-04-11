<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outdoorfeature extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    
    // public function posts(){
    //     return $this->hasMany(Post::class);
    // }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'house_outdoorfeature', 'outdoorfeature_id', 'post_id');
    }

    
}
