<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'spot_name' => 'required',
        'visited_on' => 'date|required',
        'prefecture' => 'required',
        'category' => 'required',
        'subcategory' => 'required',
        'impression' => 'required',
        'expence' => 'integer|required',
        'disclosure' => 'required'
    );

}
