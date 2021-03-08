<?php

namespace App\Http\Controllers\Contrib;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function add()
    {
        return view('contrib.profile.create');
    }
    
    public function create()
    {
        return redirect('contrib/profile/create');
    }
}
