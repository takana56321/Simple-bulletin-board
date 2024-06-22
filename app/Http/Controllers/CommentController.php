<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CommentController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $inputs=request()->validate([
            'body'=>'required|max:1000',
        ]);

        $comment=Comment::create([
            'body'=>$inputs['body'],
            'user_id'=>auth()->user()->id,
            'post_id'=>$request->post_id
        ]);

        return back();
    }

    
}
