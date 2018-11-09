<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->middleware('auth');
    }

    /**
     * This creates a follow instance
     * 
     * the accepts id of the target and the logged in user
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $loggedUser = auth()->user();//logged user
        $target = request('id'); //target to follow
        // check if the id sent is a number and represent a user in the db
        if(is_numeric($target) && User::find($target)){
            $loggedUser->toggleFollow($target);
            return array('status' => 0, 'message' => 'success');
        }

        return array('status' => 99, 'message' => 'An error occurred');
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
