<?php

namespace App\Http\Controllers;
use App\Models\Bank;
use App\Models\User;
use App\Models\Link;

use Illuminate\Http\Request;

class BankController extends Controller
{
 public function addlink(Request $request, $id = null){

    $links = new Link();
  //  print_r($request->input());


  //validate the request

  $request->input('bank_id');


    $links->userid = $request->userid;
    $links->name = $request->name;

    $links->email = $request->email;

    $links->save();
    if($request){
        return redirect()->back()->with('success', 'ID
        transferred successfully!');
    }else{
        return "watin be this ";
    }



 }
 public function getbank($id = null){
    if(empty($id)){
    $bank = Bank::get();
    return response()->json(["banks"=> $bank]);
   }else{
      $bank = Bank::find($id);
 return response()->json(["banks" =>$bank]);
   }
}

}
