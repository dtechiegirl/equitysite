<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $post = Post::orderBy('updated_at', 'DESC')->get();
        $testimonials = Post::where('category', '1')->get();
        $alumni = Post::where('category', '2')->get();
        $Client = Post::where('category', '2')->get();

        return view('blog.view-blog');
    }

    
public function entertainment(){
    $posts = Post::where('category', 'entertainment')->get();
    return view('blog.ent', ['posts'=> $posts ]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('blog.create-blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'description' => 'max:500',
            'picture' => 'required|mimes:jpg,png,jpeg|max:5048',
            'content' => 'required',
            'category' => 'required',
        ]);

         if ($request->hasFile('image')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('/images' . $filename);
            // $post->picture = $file;
        }
        $newImageName = uniqid() . '-' . $request->title . '.'  . $request->picture->extension();
        $request->picture->move(public_path('images'), $newImageName);

        // dd($slug);
        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            // 'slug' => SlugService::createslug(Post::class,  'slug', $request->title),
            'picture' =>  $newImageName,
            'content' => $request->input('content'),
            'category'=> $request->input('category'),
                   // 'user_id' => auth()->user()->id
        ]);


        return redirect('/blog')->with('message', 'Your Post Has Been Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        //
        return view('blog.show-blog')->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $id = Post::find($id);
        return view('blog.edit-blog')->with('post', $id);
    }

   

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'nullable',
            'description' => 'max:500',
            'picture' => 'nullable|mimes:jpg,png,jpeg|max:5048',
            'content' => 'nullable',
        ]);
        $post = Post::find($id);
        if ($request->hasFile('image')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('/images' . $filename);
            $post->picture = $file;
        }
        $post->update([
            'title'=> $request->title,
            'content'=> $request->content,
            'description'=> $request->description,

        ]);
      
        
        // $post->create(
          
        // ); 
        // $post->save();
        return redirect('/blog')->with('message', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('blog.delete-blog', ['post' => $post]);
    }
    public function destroy($slug)

    {
        //
        $post = Post::where('slug', $slug);
        $post->delete();
        return redirect('/blog')->with('message', 'Post Deleted Successfully');
    }
}




