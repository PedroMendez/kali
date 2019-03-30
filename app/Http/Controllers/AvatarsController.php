<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Storage;

class AvatarsController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Profile $profile)
    {   

        $avatar = request()->validate([
            'avatar' => ['required']
        ]);

        $file = request()->file('avatar');
        $path = Storage::disk('s3')->put('avatars', $file, 'public');

        $profile_id = request('profile_id');
        $user_profile = Profile::find($profile_id);
        $user_profile->image = $path;
        $user_profile->save();

        return back();
    }

}
