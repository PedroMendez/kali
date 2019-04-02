<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;
use App\User;

class CalendarsController extends Controller
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
     * Show the application calendar.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('calendars.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calendars.create');
    }  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function store(Calendar $calendar, User $user)
    {   
        $id = request('user_id');

        $names = [];

        array_push($names, 'user_id');

        for ($i = 1; $i < 6; $i++) 
        {
            for ($j = 1; $j < 8; $j++) 
            {
                array_push($names, 'campo'.$i.$j);
            };
        };

        Calendar::create(request($names));
        
        $calendar_id = Calendar::where('user_id', $id)->first()->id;
        $user = User::find($id);
        $user->calendar_id = $calendar_id;
        $user->save();
        
        return redirect('/calendars/'.$calendar_id);
    } 

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function show(Calendar $calendar)
    {
        $user = $calendar->user;
        return view('calendars.show', compact('calendar', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function edit(Calendar $calendar)
    {
        return view('calendars.edit', compact('calendar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function update(Calendar $calendar)
    {

        $names = [];

        for ($i = 1; $i < 6; $i++) 
        {
            for ($j = 1; $j < 8; $j++) 
            {
                array_push($names, 'campo'.$i.$j);
            };
        };

        $calendar->update(request()->validate($names));

        return redirect('/calendars/'.$calendar->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendar $calendar)
    {
        $calendar->delete();

        return redirect('/calendars');
    }    
}