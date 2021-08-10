<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\User;
use App\Models\City;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class MemberController extends Controller
{
//     function index(){       
//         // $used=User::with('player')->get();  
//         // $user=User::with('city')->get();  
// $users= User::with('player','city')->get();
// // dd($users); 
//        return view('relations',compact('users'));
        
//     }
public function index()
{
    //$users=User::with('city')->get();
    $users=User::where('id',Auth::user()->id)->with('player')->with('city')->get();
    //dd($users);
    // $user=City::with('user_id')->get()
    return view('manyrelation', compact('users'));
}
function show()
{
    return view('relations');
}


   public function saveForm(Request $request)
   {
    $request->validate( [
        'player_profile' => 'required',
        'player_profile.*' => 'image'
]);

    $files = [];
    if($request->hasfile('player_profile'))
 {
    foreach($request->file('player_profile') as $file)
    {
        $name = time().rand(1,100).'.'.$file->extension();
        $file->move(public_path('files'), $name);  
        $files[] = $name;  
   
// dd($files);

     
     Player::create([
            'user_id'        => Auth::user()->id,   
            'player_profile'  => $name                      
        ]);
 

        City::create([  
            'user_id'    => Auth::user()->id,   
            'player_name'    => $request->player_name,      
            'city_name'  => $request->city_name,
            
        ]);
    }  
}
        return back()->with('success', 'Data Your files has been successfully added');    
   }
   


 
}
