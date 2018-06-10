<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Post;
use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function main(){
        return view('main',[
            'posts' => Post::all()
                        ->where('type','=','post')
        ]);
    }

    public function admin(){
        if(Auth::check()){
            return view('admin',['hide_menu' => true]);
        }else{
            return view('login',['hide_menu' => true]);
        }
    }

    public function auth(Request $request){
        if(
            $request->input('inputEmail') == env('ADMIN_LOGIN', false) &&
            $request->input('inputPassword') == env('ADMIN_PASS', false)
        ){
            $user = User::firstOrCreate([
                'name' => 'admin',
                'email' => env('ADMIN_LOGIN', false),
                'password' => env('ADMIN_PASS', false)
            ]);
            Auth::login($user);
        }
        return redirect('/admin');
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
