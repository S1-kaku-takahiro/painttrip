<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = array('id');
    
    protected $dates = [
        'visited_on',
        'created_at',
        'updated_at'
    ];
    
    public static $rules = array(
        'spot_name' => 'required|max:100',
        'visited_on' => 'date|required',
        'prefecture' => 'required',
        'category' => 'required',
        'subcategory' => 'required',
        'impression' => 'required|max:500',
        'expence' => 'integer|max:1000000|required',
        'disclosure' => 'required'
    );

}
