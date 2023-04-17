<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Jetstream\Rules\Role;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'user_id',
        // 'category_id',
        // 'outdoorFeature_id',
        'Bedrooms',
        'space' ,
        'price' ,
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
        return $this->belongsToMany(Outdoorfeature::class, 'post_outdoorfeature', 'post_id', 'outdoorfeature_id');
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function type(){
        return $this->belongsTo(Type::class);
    }
    
}
