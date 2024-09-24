<?php

namespace App\Http\Controllers;
use App\Models\Bank;
use App\Models\User;
use App\Models\Link;

use Illuminate\Http\Request;



class BankController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

 public function addlink(Request $request, ){
// validate email
$request ->validate([
    'email' => 'required|email|unique:links,email',
] , [
    'email.unique' => 'This email has been linked to another user account.',
]);
    $links = new Link();
  //  print_r($request->input())
  //validate the re


    $links->userid = $request->userid;
    $links->name = $request->name;

    $links->email = $request->email;

    $links->save();
    if($request){
        return redirect()->back()->with('success','Bank email linked '
       );
    }else{
        return "wrong error handling! ";
    }



 }

 public function getBank($id = null){
    if(empty($id)){
    $banks = Bank::get();
    return response()->json(["banks"=> $banks]);
   }else{
      $banks = Bank::find($id);
 return response()->json(["banks" =>$banks]);

}
}

//  public function getbank($id = null){
//     if(empty($id)){
//     $bank = Bank::get();
//     return response()->json(["banks"=> $bank]);
//    }else{
//       $bank = Bank::find($id);
//  return response()->json(["banks" =>$bank]);
//    }
// }

}
