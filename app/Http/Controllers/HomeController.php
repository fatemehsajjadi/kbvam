<?php

namespace App\Http\Controllers;

use App\Models\Alarms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $alarms_footer = Alarms::select('*')->orderBy('id','desc')->limit(3)->get();

        return view('web.home',compact('alarms_footer'));
    }

    public function contact_us(Request $request)
    {
        $alarms_footer = Alarms::select('*')->orderBy('id','desc')->limit(3)->get();
        return view('web.contact_us',compact('alarms_footer'));
    }

    public function logout()
    {
        Auth::logout();;
        return redirect()->back();
    }
}
