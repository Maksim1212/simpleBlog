<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index()
    {

        $posts = Post::latest()

            ->filter(request(['month', 'year']))

            ->paginate (25);

        return view('posts.index', compact('posts'));

    }

    public function create()
    {
        return view('posts.create');
    }

    public function delete(Post $post)
    {

        $findPost = Post::find($post->id);
        if($findPost->delete()){
            return redirect()->action('PostsController@index')
                ->with('succes','Post deleted successfully');
        }
        return back()->withInput()->with('error','Post could not be deleted');
    }


    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required|max:50',

            'body' =>'required',
        ]);

        auth()->user()->publish(
            new Post(request(['title','body']))
        );

        return redirect('/');
    }

    public function show($id)
    {

        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }


    public function edit($id)
    {
        if(Auth::guest())
        {
            return redirect('/');
        }

        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }




    public function update(Request $request, $id)
    {


        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return redirect('/')->with('success', 'Post Updated');
    }


    public function search(Request $request)
    {

        $search = $request->get('search');

        $posts = Post::with('user')

            ->where('posts.title', 'like','%'.$search.'%')->paginate(25);

        return view('posts.index',[
            'posts' => $posts
        ]);
    }

}
