<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Author;
use App\Tag;
use App\Mail\Postcreated;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();
      return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        $tags = Tag::all();
        return view('posts.create',compact('authors','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $post = new Post();
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->author_id = $data['author_id'];
        // $post->fill();
        
        // Salva file Immagine ed in path salva il nome del file
        $path = $request->file('picture')->store('images');


        //Check if author_id exists
        $author_id = $data['author_id'];
        if(!Author::find($author_id)){
          dd("Error on author_id" . $author_id);
          // redirect su pagina di errore
        }

        // Save post
        $post->save();

        // Save relations
        $post->tags()->attach($data['tags']);

        //Send email when post saved
        Mail::to('fakeuser@ciao.it')->send(new PostCreated($post));
        // Redirect su index
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
