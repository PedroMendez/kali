<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = 
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
    ];
    
    public function user() 
    {
        return $this->belongsTo(User::class);
    }    
}