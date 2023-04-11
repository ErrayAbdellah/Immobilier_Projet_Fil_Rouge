<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'category_id',
        'outdoorFeature_id',
        'type_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
    // public function outdoorfeature(){
    //     return $this->belongsTo(Outdoorfeature::class);
    // }
    public function outdoorfeature()
    {
        return $this->belongsToMany(Outdoorfeature::class, 'house_outdoorfeature', 'post_id', 'outdoorfeature_id');
    }
    public function image(){
        return $this->belongsTo(Image::class);
    }
    public function type(){
        return $this->belongsTo(Type::class);
    }


}
