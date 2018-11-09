<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Hashing\Hasher as HasherContract;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile(HasherContract $hasher){

        //check for authenticated user id
        //query the database and get profile then return to view
        $id = Auth::id();
        //$profile = User::with('profile')->find($id);
        $profile = User::with('profile.role')->find($id);
//        dd(collect(User::with('profile.role')->find($id)));
//        $g = $hasher->check('258012we',Auth::user()->getAuthPassword());
//        dd($g);
        return view('profile',['user' => $profile]);
    }
    public function update(Request $request, HasherContract $hasher, Conversion $conversion){
        //dd($request->all());
        $rules = [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255'
        ];
        if($request->input('old_password') != null){
            logger('it got here');
            $rules['password'] = 'required|string|min:6|confirmed' ;
            logger($rules);
        }
        $this->validate($request, $rules);

        $em = User::query()->where('email', '=', $request->input('email'))->first(['id']);

        if($em->id != Auth::id()) return back()->withErrors(['email'=>'This email has been taken by another user']);


        if($request->input('old_password') != null){
            if(!$hasher->check($request->input('old_password'),Auth::user()->getAuthPassword())){
                return back()->withErrors(['old_password'=>'you entered the wrong password']);
            }
        }
        $user = Auth::user();
        $profile = Profile::query()->where('user_id','=', Auth::id())->first();

        $user->name = $request->input('fullname');
        $user->email = $request->input('email');
        if(!empty($request->input('old_password'))){
            $user->password = Hash::make($request->input('password'));
        }
        $user->save();

        logger($request->input('address'));
        if($request->input('address') != null){
            $profile->address = $request->input('address');
        }
        if($request->input('home_number') != null) {
            $profile->home_number = $request->input('home_number');
        }
        if($request->input('zip_code') != null) {
            $profile->zip = $request->input('zip_code');
        }
        if($request->input('postal_code') != null) {
            $profile->postal_code = $request->input('postal_code') ?? $profile->postal_code();
        }
        if($request->input('currency') != null){
            if(Auth::user()->profile->currency_code !=  $request->input('currency')){
                $this->changeCurrency($request, $conversion);
            }
            $profile->currency_code = $request->input('currency');
        }

        $profile->save();
        Session::flash("message","Profile Updated successfully");
        return back();
    }

}
