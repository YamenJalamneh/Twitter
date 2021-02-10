<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   public function view($id){
       $user=User::findOrfail($id);
       $userid=$user->id;
       return view('profile',compact('userid','user'));

   }

    public function comment($id)
    {
       $tweet=Tweet::where('id',$id)->first();
       return view('comment',compact('tweet'));
    }


}
