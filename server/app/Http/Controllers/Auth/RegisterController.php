<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function register(Request $request)
    {
        $data = $request->all();
        $userData = new User();

        $validator = Validator::make($data, [
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'gender' => 'required|string',
            'age' => 'required',
            'country' => 'required|string',
            'state' => 'required|string',
            'bio' => 'required|string',
        ]);

        $userData->name = $data['name'];
        $userData->email = $data['email'];
        $userData->password = Hash::make($data['password']);
        $userData->gender = $data['gender'];
        $userData->age = $data['age'];
        $userData->country = $data['country'];
        $userData->state = $data['state'];
        $userData->bio = $data['bio'];

        if($validator->passes()){

            //send a Welcome Email to the user ---> NOT implemented yet!

            $userData->save();

            //take me to login page
            return redirect(route('login'));
        }else{

            //return $validator->messages();
            return redirect(route('register'))->withErrors($validator)->withInput();
        }
    }
}

