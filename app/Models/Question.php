<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\Reply;


class Question extends Model
{
    use HasFactory;
   protected $guarded=[];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function replies(){
        return $this->hasMany(Reply::class);
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    public function getPathAttribute(){
        return asset("api/question/$this->slug");
    }
}
