<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return PostResource::collection($user->posts);
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
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */

public function edit(Request $request, $id=null){
    $_title = "Edit Posts";
    $postDetails = CouponCode::find($id);
        if($request->isMethod('post')){
            $data = $request->all();
            var_dump($data);
            $post = CouponCode::find($id);
            $post->category = $data['category'];
            $post->body = $data['body'];
            $post->sharing_permission = $data['sharing_permission'];
            $post->save();
            return redirect()->action('PostController@view')->with('flash_message_success','success');

        }

    return view('',["_title"=>$_title])->with(compact('postDetails'));


}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Post $post)
    // {
    //     //
    // }

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
