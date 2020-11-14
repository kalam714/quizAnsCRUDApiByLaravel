<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Http\Resources\ReplyResource;
class ReplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index','show']]);
    }
    
    public function index(Question $question)
    {
       return ReplyResource::collection($question->replies);
    }

   
    public function store(Question $question, Request $request)
    {
        $reply=$question->replies()->create($request->all());
        return response('data saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question, Reply $reply)
    {
        return new ReplyResource($reply);
    }

  

    public function update(Question $question,Request $request, Reply $reply)
    {
        $reply->update($request->all());
        return response('updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question,Reply $reply)
    {
        $reply->delete();
        return response('deleted');
    }
}
