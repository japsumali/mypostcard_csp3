<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    function store($id, Request $postcard_comment){
    	$comment = new Comment();
    	$comment->description = $postcard_comment->description;
    	$comment->article_id = $id;
    	$comment->user_id = Auth::user()->id;
    	$comment->save();

    	return redirect("/dashboard/$id");
    }
}
