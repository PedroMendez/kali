<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Picture;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PicturesController extends Controller
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
    public function index(Picture $picture, Profile $profile, User $user)
    {
        $role = Auth::user()->role;
        $id = Auth::id();
        $user = User::find($id);
        $profile_id = $user->profile_id;
        $profile = Profile::find($profile_id);
        $picture_id = $profile->pictures;
        $picture = Picture::find($picture_id);

        if ($id == $profile->user_id || $role != 'User') 
        {
            return view('pictures', compact('picture', 'profile'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Profile $profile, Picture $picture)
    {   

        $picture = request()->validate([
            'picture' => ['required']
        ]);

        $file = request()->file('picture');
        $path = Storage::disk('s3')->put('pictures', $file, 'public');

        $profile_id = request('profile_id');
        $profile = Profile::find($profile_id);

        if ($profile->pictures) 
        {
            $pictures_id = $profile->pictures;
            $picture = Picture::find($pictures_id);
            
            if (!$picture->image2)
            { 
                $picture->image2 = $path;
                $picture->save();
                return back();
            }
            
            else
            { 
                $picture->image3 = $path;
                $picture->save();
                return back();
            }                                 
        }
        
        else 
        {
            $picture = new Picture;
            $picture->profile_id = $profile_id;
            $picture->image1 = $path;
            $picture->save();
            $profile->pictures = $picture->id;
            $profile->save();
        }

        return back();
    }     
}
