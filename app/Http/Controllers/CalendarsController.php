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
        request()->validate(
            [
                'campo11' => ['required', 'min:3'],
                'campo12' => ['required', 'min:3'],
                'campo13' => ['required', 'min:3'],
                'campo21' => ['required', 'min:3'],
                'campo22' => ['required', 'min:3'], 
                'campo23' => ['required', 'min:3'],
                'campo31' => ['required', 'min:3'],
                'campo32' => ['required', 'min:3'],
                'campo33' => ['required', 'min:3'],
                'campo41' => ['required', 'min:3'],
                'campo42' => ['required', 'min:3'],
                'campo43' => ['required', 'min:3'], 
                'campo51' => ['required', 'min:3'],
                'campo52' => ['required', 'min:3'],
                'campo53' => ['required', 'min:3']
            ]
        );
        
        $id = request('user_id');
        
        Calendar::create(request(
            [
                'user_id', 
                'campo11',
                'campo12',
                'campo13',
                'campo21',
                'campo22', 
                'campo23', 
                'campo31',
                'campo32',
                'campo33',
                'campo41',
                'campo42',
                'campo43', 
                'campo51',
                'campo52',
                'campo53'
            ]
        ));
        
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
        $calendar->update(request()->validate(
            [
                'campo11' => ['required', 'min:3'],
                'campo12' => ['required', 'min:3'],
                'campo13' => ['required', 'min:3'],
                'campo21' => ['required', 'min:3'],
                'campo22' => ['required', 'min:3'], 
                'campo23' => ['required', 'min:3'],
                'campo31' => ['required', 'min:3'],
                'campo32' => ['required', 'min:3'],
                'campo33' => ['required', 'min:3'],
                'campo41' => ['required', 'min:3'],
                'campo42' => ['required', 'min:3'],
                'campo43' => ['required', 'min:3'], 
                'campo51' => ['required', 'min:3'],
                'campo52' => ['required', 'min:3'],
                'campo53' => ['required', 'min:3']
            ]
        ));

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