<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags=Tag::orderby('created_at','DESC')->paginate(20);
        return view('backend.pages.tag.tagindex',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.tag.tagcreate');
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
            'name' => "required|unique:tags,name,",
        ]);

        $category = Tag::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name,'-'),
            'description' => $request->description,
        ]);
        Session::flash('success','Tag Created Successfully.');
        return redirect()->route('tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('backend.pages.tag.tagedit',compact('tag'));
        // return hello;
        // dd($tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $this->validate($request,[
            'name' => "required|unique:tags,name,",
        ]);

        $category = Tag::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name,'-'),
            'description' => $request->description,
        ]);
        Session::flash('success','Tag Created Successfully.');
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        if($tag){
            $tag->delete();
            Session::flash('success','Tag Created Successfully.');
        return redirect()->route('tag.index');
        }
    }
}
