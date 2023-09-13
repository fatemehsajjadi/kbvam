<?php

namespace App\Http\Controllers\Admin;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class QueueController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $settings = Settings::first();
        return view('admin.page.queue_config', compact('settings'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'queue' => 'required',
        ]);

        $settings = Settings::first();
        $settings->queue = $request->queue;
        $settings->save();

        return redirect()->back();
    }


}
