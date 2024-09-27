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
    $pay = new Pay;
    $pay->payment_id = $response['id'];
    $pay->product_name = session()->get('product_name');
    $pay->quantity = session()->get('quantity');
    $pay->amount = $response['purchase_units'][0]['payments']['captures'][0]['amount']
    ['value'];
    $pay->currency = $response['purchase_units'][0]['payments']['captures'][0]['amount']
    ['currency_code'];
    $pay->payer_name = $response['payer']['name']['given_name'];
    $pay->payer_email = $response['payer']['email_address'];
    $pay->payment_status = $response['status'];
    $pay->payment_method =  "Paypal";
    $pay->save();

    return "payment is successful";

    unset($_SESSION['product_name']);
    unset($_SESSION['quantity']);


} else{
    return redirect()->route('Pay/cancel');
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
