<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\City;

class Player extends Model
{
    use HasFactory;
    protected $fillable=[
           'user_id','player_profile'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

   
}
