<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use validator;

class UserController extends Controller
{
    //
    public function getUsers($id = null){
        if(empty($id)){
        $users = User::get();
        return response()->json(["users"=> $users]);
       }else{
          $users = User::find($id);
     return response()->json(["users" =>$users]);

    }
    }




    public function addUser(Request $request){
       if($request->isMethod('post')){
           $userData = $request->input();
    // echo "<pre>"; print_r($userData);

//Simple Post API Validations

//check Usere Details
    if(empty($userData['name']) || empty($userData['email']) || empty($userData['password'])){

    }{
        $message = "please enter complete user details!";
        return  response()->json(["status"=>false, "message"]);
    }
          $user = new User;
       $user->name = $userData['name'];
       $user->area = $userData['area'];
    $user->email = $userData['email'];
      $user->password = bcrypt($userData['password']);
      $user->save();
      return response()->json(["message"=> 'User added successfully!']);



}
}
  public function  addMultipleUsers(Request $request){
    if($request->isMethod('post')){
        $userData = $request->input();
        echo "<pre>"; print_r($userData); die;
  }
}
}
