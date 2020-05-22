<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use App\Providers\RouteServiceProvider;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if(Auth::user()->role['name'] == 'admin'){
        //     return redirect(RouteServiceProvider::ADMIN_HOME);
        // }
        return view('admin.home');
    }
}
