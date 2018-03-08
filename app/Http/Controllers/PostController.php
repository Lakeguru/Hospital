<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use Validator;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function createpost()
    {
        return view('blogs.post');
    }

    public function postcreate(Request $request)
    {

            $validator = Validator::make($request->all(), [
                'title'=>'required',
                'picture'=> 'required',
                'body' => 'required',
            ]);

                $post = new Post();
                $post->title = $request->title;
                $post->picture = $request->picture;
                $post->body = $request->body;
                $post->save();

                dd($request);
             return redirect()->route('index');


    }
}
