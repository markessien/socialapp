<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class SessionsController extends Controller
{
  public function create()
    {
        return view('sessions.create');
    }
  public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/');
    }
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/');
    }
}