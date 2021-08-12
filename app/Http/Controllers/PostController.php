<?php

namespace App\Http\Controllers;
// namespace Illuminate\Support;
// namespace App\Http\Controllers\Api;

// use Illuminate\Support\Controller;
use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon as BaseCarbon;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderby('created_at','DESC')->paginate(20);
        return view('backend.pages.post.postindex', compact('posts'));
        // return view('backend.pages.post.errortest');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
        return view('backend.pages.post.postcreate',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
           'title' => 'required|unique:post,title',
           'image' => 'required|image',
           'description' => 'required',
           'category' => 'required',

       ]);

       $post=Post::create([
            'title' =>$request->title,
            'slug'=> Str::slug($request->title),
            'image' => 'image.jpg',
            'description'=>$request->description,
            'category_id'=>$request->category,
            'user_id'=>auth()->user()->id,
            'published_at'=>Carbon::now(),
       ]);


       Session::flash('success','Post created successfully.');
       return redirect()->back();



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
