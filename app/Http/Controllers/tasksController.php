<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tasksController extends Controller
{
	
   public function addTask(Request $request){
      echo 'store';
   }
   public function getTask($id){
      echo 'show';
   }
   public function getTasks($id){
      echo '';
   }
   public function updateTask(Request $request, $id){
      echo '';
   }
   public function deleteTask($id){
      echo 'destroy';
   }
}
