<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redeem extends Model
{
    protected $fillable = [
        'redeem_uc','pubg_id','status','uc','coins',
    ];
}
