<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
	
   public function addUser(Request $request){
      echo 'store';
   }
   
   public function getUser($id){
	
		return view('profile',array('user_id' => $id));
   }
   
   public function updateUser(Request $request, $id){
      echo '';
   }
   
   public function deleteUser($id){
		return view('ban_user',array('user_id' => $id));
   }
}
