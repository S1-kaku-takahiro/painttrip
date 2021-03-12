<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'role' => 'required',
        'nickname' => 'required|max:30',
        'next_prefecture' => 'required',
        'favorite_category' => 'required',
        'introduction' => 'required|max:160'
    );
}
