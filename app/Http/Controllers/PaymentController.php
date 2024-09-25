<?php

namespace App\Http\Controllers;
use App\Models\Pay;
use App\Models\User;
use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

    public function pay(){
        //Retrive the authentication user's pay
        $pays = Pay::where('userid', Auth()->id())->get();

        return view('/trans',compact('pay'));
    }

    public function pay_user(){
         return view ('pay_user');
    }

    public function store (Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'Amount' => 'required|string|max:255',
            'Card_no' => 'required|string|max:255',
            'ED' => 'required|string|max:255',
            'cvv' => 'required|string|max:255',
        ]);

        // Create a new payment entry for the authenicated user
        Pay::create([
            'userid' => Auth()->id,
            'name'=> $request->name,
            'Amount'=> $request->Amount,
            'Card_no'=> $request->Card_no,
            'ED'=> $request->ED,
            'cvv'=> $request->cvv,

        ]);
        return redirect('pay.index')->with('success','Bank payment successfully ');
    }
}
