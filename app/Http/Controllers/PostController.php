<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts =Post::all();
        foreach ($posts as $post) {
          # code...
        $var[]= [
             'id'=> $post->id ,
             'title'=> $post->title ,
             'body'=> $post->body ,
             'link'=> route('post.show',$post->id),
              ] ;


        }
        return $var;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show( $post)
    {
        //
        $postv = Post::where('id',$post)->get();
      //  foreach ($postv as $posts) {
          // code...

        //  $avr[]= [
        // //  'id'=>$post,
        //   'title'=>$posts->title,
        //   'body'=>$posts->body,
        //   'category'=>$posts->category,
        //   'user'=>$posts->user_id,
        //   //'review'=>Post::find($post->id)->review->count()>0? route("review.index",$post->id):'no reviews on this post',
        //
        // ];}
       $postv->toArray();
       // $var[]=[
       //   'review'=>Post::find($post)->review->count()>0? route("review.index",$post):'no reviews on this post',
       // ];
       // $posta = $postv->merge($var);
         return $postv->add(['review'=>Post::find($post)->review->count()>0? route("review.index",$post):'no reviews on this post',]);
        //return $var;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
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
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
