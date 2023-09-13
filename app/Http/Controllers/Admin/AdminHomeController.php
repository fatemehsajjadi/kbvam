<?php

namespace App\Http\Controllers\Admin;

use App\Models\Payments;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_users_count = Payments::count();
        $payed_count = Payments::where('is_used',1)->count();
        $not_payed_count = Payments::where('is_used',0)->count();
        $pricing = Settings::first();
        $queue = $pricing->queue;
        $pricing = $pricing->pricing;

        return view('admin.index',compact(
            'payed_count',
            'not_payed_count',
            'all_users_count',
            'pricing',
            'queue'
        ));
    }

    public function login()
    {
        return view('admin.login');
    }


}
