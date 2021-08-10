<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;
use App\Models\User;
class City extends Model
{
    use HasFactory;
    protected $fillable=[
'user_id','player_name','city_name',
    ];
    public function  cities()
    {
        return belongsTo(User::class);
    }
   

}
