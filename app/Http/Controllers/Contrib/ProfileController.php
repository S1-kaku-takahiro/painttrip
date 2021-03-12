<?php

namespace App\Http\Controllers\Contrib;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Profile;

class ProfileController extends Controller
{
    public function add()
    {
        return view('contrib.profile.create');
    }
    
    public function create(Request $request)
    {
        
        $this->validate($request, Profile::$rules);
        
        $profile = new Profile;
        $form = $request->all();
        
        if (isset($form['profile_image'])) {
            $path = $request->file('profile_image')->store('public/image');
            $profile->profile_image_path = basename($path);
        } else {
            $profile->profile_image_path = null;
        }
        
        unset($form['_token']);
        unset($form['profile_image']);
        
        $profile->fill($form);
        $profile->user_id = Auth::id();
        $profile->save();
        
        return redirect('contrib/profile/create');
    }
    
}
