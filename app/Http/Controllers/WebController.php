<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class WebController extends Controller
{
    public function dashboard(){
        $this->AdminAuthCheck();
        return view('dashboard');
    }

    public function book(){
        $this->AdminAuthCheck();
        return view('booking');
    }

    public function category(){
        $this->AdminAuthCheck();
        return view('categories');
    }

    public function users(){
        $this->AdminAuthCheck();
        return view('users');
    }

    // Admin
    public function admin(){
        $this->AdminAuthCheck();
        return view('admin');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email=$request->email;
        $password=sha1($request->password);

        $result=DB::table('admins')
            ->where('email',$email)
            ->where('password',$password)
            ->first();

        if ($result) {
            Session::put('speudo', $result->speudo);
            Session::put('admin_id', $result->id);
            return Redirect::to('/dashboard')->with('message','Bienvenue sur votre espace administration');
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/')->with('message','Vous vous etez deconnectez');
    }

    public function AdminAuthCheck(){
        $admin_id=Session::get('admin_id');
        if ($admin_id) {
            return;
        }else {
            return Redirect::to('/')->send();
        }
    }
}
