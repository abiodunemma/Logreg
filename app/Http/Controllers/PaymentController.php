<?php

namespace App\Http\Controllers;
use App\Models\Pay;
use App\Models\User;
use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaymentController extends Controller
{

    public function pay(){


        //Retrive the authentication user's pay
    //    $pays = Pay::where('userid', Auth()->id())->get();
        return view('/Pay/trans');
    }

    public function paypal(Request $request){

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent"=> "CAPTURE",
            "application_context" => [
                 "return_url"=> route('Pay/success'),
                  "cancel_url"=> route('Pay/cancel'),

            ],
    "purchase_units"=> [
      [
        "amount"=> [
          "currency_code"=> "USD",
          "value" => $request->price
            ]      ]
    ]
        ]);
       // dd($response);
       if(isset($response['id'])  && $response['id'] !=null){
        foreach($response['links'] as  $link){
            if($link['rel'] == 'approve') {
                session()->put('product_name', $request->product_name);
                session()->put('quantity', $request->quantity);
                return redirect()->away($link['href']);
            }
        }
       } else {
        return redirect()->back()->route('Pay/cancel');
       }

    }
public function success(Request $request){
    $provider = new PayPalClient;
    $provider->setApiCredentials(config('paypal'));
    $provider->getAccessToken();
    $response = $provider->capturePaymentOrder($request->token);
//dd($response);
if(isset($response['status']) && $response['status'] == 'COMPLETED') {

    //Insert data into databse
    $pay
}

}


public function cancel(){
    return 'Payment was successful.Thank you!';
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
