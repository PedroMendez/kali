<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profiles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function store(Profile $profile, User $user)
    {

        request()->validate([
            'interests' => ['required', 'min:3'],
            'phone' => ['required', 'min:3']
        ]);
        
        $id = request('user_id');
        
        Profile::create(request(['user_id', 'interests', 'phone', 'image']));
        
        $profile_id = Profile::where('user_id', $id)->first()->id;
        $user = User::find($id);
        $user->profile_id = $profile_id;
        $user->save();
        
        return redirect('/profiles/'.$profile_id);
    } 

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        $role = Auth::user()->role;
        $id = Auth::id();

        if($id == $profile->user_id || $role != 'User') 
        {
            $user = $profile->user;
            return view('profiles.show', compact('profile', 'user'));
        } 
        return abort(403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        $role = Auth::user()->role;
        $id = Auth::id();

        if($id == $profile->user_id || $role != 'User') 
        {
            return view('profiles.edit', compact('profile'));
        }
        
        return abort(403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Profile $profile)
    {
        $role = Auth::user()->role;
        $id = Auth::id();

        if($id == $profile->user_id || $role != 'User') 
        {
            $profile->update(request()->validate([
                'interests' => ['required', 'min:3'],
                'phone' => ['required', 'min:3']
            ]));

            return redirect('/profiles/'.$profile->id);
        }

        return abort(403);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $role = Auth::user()->role;
        $id = Auth::id();

        if($id == $profile->user_id || $role != 'User') 
        {
            $profile->delete();

            return redirect('/profiles');
        }

        return abort(403);
    }  
}
