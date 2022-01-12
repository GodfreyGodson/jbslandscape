<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all posts
        $posts = Post::paginate(2);
        
        $others = Post::inRandomOrder()->limit(3)->get();
        
        return view('blog.index')->with('posts',$posts)->with('others',$others);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // validate inputs
         $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif,svg|max:8192',
            'category' => 'required',
        ]);

        // store to db
        $user = session('LoggedUser');
        $newImageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images/posts'), $newImageName);
        Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'image_path' => $newImageName,
            'user_id' => $user->id,
            'category' => $request->input('category'),
        ]);

        return redirect('/blog')->with('message','Post created sucessful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $others = Post::inRandomOrder()->limit(3)->get();
        return view('blog.show')->with('post',$post)->with('others',$others);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('blog.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate inputs
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'mimes:png,jpg,jpeg,gif,svg|max:8192|nullable',
            'category' => 'required',
        ]);
        $post = Post::find($id);
        // update post
        if($request->hasFile('image')){
            $newImageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/posts'), $newImageName); 
            $post->update([
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'image_path' => $newImageName,
                'category' => $request->input('category')
            ]);
            
            // delete old image
            $image_path = "/images/posts/".$post->image_path;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
        } else {
            $post->update([
                'title' => $request->input('title'),
                'body' => $request->input('body'),                
                'category' => $request->input('category')
            ]);
        }       
        
        return redirect('/blog')->with('message','Post updated sucessful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/blog')->with('message','Post deleted sucessful');
    }

    public function category($cat)
    {
        
        $posts = Post::where('category','=',$cat)->paginate(2);
        //dd($posts);
        $others = Post::inRandomOrder()->limit(3)->get();

        return view('blog.index')->with('posts',$posts)->with('others',$others);
    }

    public function archive($date)
    {
        $array = explode("-",$date);
        
        $posts = Post::whereYear('created_at',$array[1])
                       ->whereMonth('created_at',$array[0])
                       ->paginate(2);
        $others = Post::inRandomOrder()->limit(3)->get();

        return view('blog.index')->with('posts',$posts)->with('others',$others);
    }
}
