<?php

namespace Modules\Blog\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Blog\Models\Post;
use Modules\Blog\Models\Tag;
use Modules\Blog\Models\Category;
use App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('blog::posts.index', compact('posts'));
    }
    
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function admin()
    {
        // $posts = Post::with('author')
        //             ->latestFirst()
        //             ->published()
        //             ->paginate($this->limit);
        return view('blog::posts.admin');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id')->toArray();
        // $tags = Tag::all();
        $tags = Tag::pluck('name', 'id')->toArray();
        return view('blog::posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author_id' => '',
            'slug' => '',
            'excerpt' => 'required',
            // 'body' => '',
            'editor' => 'required', // => body
            'image' => '',
            'published_at' => '',
            'categories' => 'required',
        ]);

        // return Post::Create($request->all());
        $post = new Post;
        $post->author_id = '1';
        $post->slug = str_random(20);
        $post->title = $request->get('title');
        $post->body = $request->get('editor');
        $post->excerpt = $request->get('excerpt');
        $post->published_at = Carbon::parse($request->get('date'));/*$request->has('published_at') ? Carbon::parse($request->get('date')) : Null;*/
        $post->category_id = $request->get('categories');
        // // tag's
        $post->save();
        $post->tags()->attach($request->get('tags'));

        return back()->with('flash', 'Publicado com sucesso');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('blog::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('blog::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
