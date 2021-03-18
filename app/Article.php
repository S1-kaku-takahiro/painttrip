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
        'visited_on' => 'required|date',
        'prefecture' => 'required|between:1,47',
        'category' => 'required|between:1,7',
        'subcategory' => 'required|between:1,999',
        'impression' => 'required|max:500',
        'congestion' => 'required|between:1,4',
        'expence' => 'required|integer|max:1000000',
        'nearest_station' => 'max:23',
        'parking' => 'between:0,2',
        'disclosure' => 'required|between:0,1'
    );

}
