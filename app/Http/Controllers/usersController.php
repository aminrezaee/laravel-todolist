<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
	
   public function addUser(Request $request){
      echo 'store';
   }
   public function getUser($id){
      echo 'show';
   }
   public function getUsers($id){
      echo '';
   }
   public function updateUser(Request $request, $id){
      echo '';
   }
   public function deleteUser($id){
      echo 'destroy';
   }
}
