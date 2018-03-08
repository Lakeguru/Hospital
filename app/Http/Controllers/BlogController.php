<?php

namespace App\Http\Controllers;


use App\Blogdetails;
use App\Blog;
use App\Comment;
use Validator;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function blog()
    {
        return view('blogs.blog');
    }

    public function blogdetails()
    {
        return view('blogs.blogdetatails');
    }



    public function comment()
    {
        $validator = Validator::make($request->all(), [
            'body' => 'required',
        ]);

        if ($comment)
        {
            $comment = new Comment();
            $comment->body = $request->body;
            $comment->save();

            return back()->with('success','Comment created successfully');
        }
        return back()->withInput()->with('errors', 'Error creating new comment');
    }

    public function postdetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required',
        ]);

        dd($request->all());
    }
}
