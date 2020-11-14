<?php

namespace App\Http\Controllers;

use App\Models\like;
use App\Models\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{

    public function __construct()
    {
        $this->middleware('JWT');
    }
   public function likeReply(Reply $reply){
       $reply->like()->create([
           'user_id'=>'1'
       ]);

   }
   public function unlikeReply(Reply $reply){
    $reply->like()->where('user_id','1')->first()->delete();
   }
}
