<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Question;
use App\Models\Like;

class Reply extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function question(){
        return $this->belongsTo(Question::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function like(){
        return $this->hasMany(Like::class);
    }
}
