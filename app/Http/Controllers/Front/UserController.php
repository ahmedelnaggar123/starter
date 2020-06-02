<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
   public function showUserName(){
    	
    	return 'Ahmed elnaggar';
   
   }

   public function getIndex(){

   		// $date=[];
   		// $data['id']=5;
   		// $data['name']='ahmed elnaggar';

     //  $obj = new \stdClass();

     //  $obj -> name = 'ahmed';
     //  $obj -> id = 5;
     //  $obj -> gender = 'male';

      $data=[];
   		return view('welcome',compact('data'));
   }

}
