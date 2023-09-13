<?php

namespace App\Http\Controllers\Admin;

use App\Models\Alarms;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AlarmsController extends Controller
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

        $alarms = Alarms::select('*')->orderBy('id','desc')->paginate(15);
        return view('admin.page.alarm.alarms_list', compact('alarms'));
    }


    public function show(Alarms $alarm)
    {
        return view('admin.page.alarm.show_alarm',compact('alarm'));
    }



    public function delete(Alarms $alarm_id)
    {
       $alarm_id->delete();
       return redirect()->back();
    }



    //-------------------------create------------------//
    public function create()
    {
        return view('admin.page.alarm.create_alarm');
    }

    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        Alarms::create($request->all());
        return redirect()->to('/paneladmin/alarms');
    }
    //


    //------------------------update------------------------
    public function edit(Alarms $alarm)
    {
        return view('admin.page.alarm.edit_alarm',compact('alarm'));
    }

    public function update(Request $request,Alarms $alarm)
    {
        $alarm->update( $request->except(['_token']));
        return redirect()->back();
    }
    //


}
